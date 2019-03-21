<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'empresa_id', 'nome', 'endereco','cpf','banco','agencia','conta'
    ];
}
