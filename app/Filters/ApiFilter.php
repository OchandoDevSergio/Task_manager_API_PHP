<?php
namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{
    
    //Parametros por los que vamos a filtrar nuestros modelos
    protected $safeParams = [];
    //Mapeo de cómo queremos que se filtre cada campo
    protected $columnMap = [];
    //Mapeo de los operadores (ejem.: 'eq' es igual...)
    protected $operatorMap = [];

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            $column = $this ->columnMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column,$this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }

};