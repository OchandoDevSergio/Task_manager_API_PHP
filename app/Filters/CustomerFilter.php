<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
    
    //Parametros por los que vamos a filtrar nuestros modelos
    protected $safeParams = [
        'id' => ['eq'],
        'name' => ['eq'],
        'surnames' => ['eq'],
        'email' => ['eq']
    ];
    //Mapeo de cómo queremos que se filtre cada campo
    protected $columnMap = [];
    //Mapeo de los operadores (ejem.: 'eq' es igual...)
    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];


};