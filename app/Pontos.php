<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pontos extends Model
{
    protected $table = 'pontos';
    
    protected $fillable = [      
        'consumidor_id', 'vendedor_id','guia_id', 'valor', 'pontos','cupom_fiscal','pontos_vendedor','pontos_guia','created_at', 'updated_at'
    ];

    public function consumidor()
    {
        return $this->belongsTo(\App\Consumidor::class);
    }

    public function guia()
    {
        return $this->belongsTo(\App\Guia::class);
    }
}
