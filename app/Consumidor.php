<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $table = 'consumidores';

    protected $fillable = [
        'nome','sobrenome', 'email','cpf', 'contato','nascimento','sexo', 'created_at','updated_at', 'ativo','guia_id','user_id'
    ];

    public static $rules = array(
        'nome' => 'required | min:5',
        'email' => 'required | unique:users,email',
        // 'contato' => 'required | unique:users,contato'
    );


    public static $messages = array(
        'nome.required' => 'O campo nome precisa ser informado. Por favor, você pode verificar isso?',
        'nome.min' => 'O campo nome precisa ter o mínimo 5 caracteres. Por favor, você pode verificar isso?',
        'email.required' => 'O campo email precisa ser informado. Por favor, você pode verificar isso?',
        'email.unique' => 'O campo email já está em uso por outro usuário. Por favor, você pode verificar isso?',
        'contato.required' => 'O campo telefone precisa ser informado. Por favor, você pode verificar isso?',
        'contato.unique' => 'O campo telefone já está em uso por outro usuário. Por favor, você pode verificar isso?'
    );
}
