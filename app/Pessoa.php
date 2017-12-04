<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['id', 'nome', 'cpf', 'data_nascimento'];

}
