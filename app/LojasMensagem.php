<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LojasMensagem extends Model
{
    protected $fillable = [
        'loja_id', 'mensagem_dia', 'mensagem_antes'
    ];

    public static $rules = array(           
        'mensagem_dia' => 'required',
        'mensagem_antes' => 'required',
        
    );

    public static $messages = array(
        'mensagem_dia.required' => 'O campo Mensagem no dia do aniversario deve ser informado. Por favor, você pode verificar isso?',
        'mensagem_antes.required' => 'O campo Mensagem antes precisa ser informado. Por favor, você pode verificar isso?'    
        
    );

    public $timestamps = false;
    protected $table = 'lojas_mensagem';
}
