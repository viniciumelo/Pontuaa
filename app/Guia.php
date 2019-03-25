<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $fillable = [
        'empresa_id', 'nome', 'endereco','cpf','banco','agencia','conta','email','created_at','updated_at'
    ];
}
