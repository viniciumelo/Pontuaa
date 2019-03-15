<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pontos extends Model
{
    protected $table = 'pontos';
    
    protected $fillable = [      
        'user_id', 'loja_id', 'valor', 'pontos', 'created_at', 'updated_at', 'cupom_fiscal','pontos_config'
    ];


}
