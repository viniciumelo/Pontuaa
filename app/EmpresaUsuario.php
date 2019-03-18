<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaUsuario extends Model
{
    protected $table = 'empresas_usuarios';

    protected $fillable = ['empresa_id','user_id','created_id'];

}
