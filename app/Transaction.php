<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'transaction_id', 'transaction_uri', 'transaction_status', 'amount', 'created_at', 'updated_at'
    ];

    /**
     * Relationship with user
     */
    public function user() {
        return $this->belongsTo(\App\User::class);
    }
}
