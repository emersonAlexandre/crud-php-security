<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'descricao', 'quantidade', 'valor', 'user_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
