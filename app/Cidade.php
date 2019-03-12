<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'cod_cidades', 'nome', 'cep'
    ];

    public static $rules = array(           
        'cod_cidades' => 'required',
        'nome' => 'required',
        'cep' => 'required',
        
    );

    public static $messages = array(
        'nome.required' => 'O campo Nome deve ser informado. Por favor, você pode verificar isso?',
        'cep.required' => 'O campo Cep deve ser informado. Por favor, você pode verificar isso?'    
        
    );

    public $timestamps = false;
    protected $table = 'cidades';
}
