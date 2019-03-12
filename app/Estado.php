<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'sigla', 'nome'
    ];

    public static $rules = array(           
        'sigla' => 'required',
        'nome' => 'required',
        
    );

    public static $messages = array(
        'sigla.required' => 'O campo Sigla deve ser informado. Por favor, você pode verificar isso?',
        'nome.required' => 'O campo Nome precisa ser informado. Por favor, você pode verificar isso?'    
        
    );

    public $timestamps = false;
    protected $table = 'estados';
}
