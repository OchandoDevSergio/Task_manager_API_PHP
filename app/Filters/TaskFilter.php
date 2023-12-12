<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TaskFilter extends ApiFilter{
    
    //Parametros por los que vamos a filtrar nuestros modelos
    protected $safeParams = [
        'id' => ['eq'],
        'customerId' => ['eq'],
        'status' => ['eq'],
        'description' => ['eq'],
    ];
    //Mapeo de cómo queremos que se filtre cada campo
    protected $columnMap = [
        'customerId' => 'customer_id',
    ];
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