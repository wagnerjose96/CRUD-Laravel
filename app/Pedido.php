<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id',
        'pessoa_id',
        'numero',
        'emissao',
        'total'
    ];
}
