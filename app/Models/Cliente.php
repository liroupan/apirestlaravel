<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'celular','cep','endereco','numero','complemento','bairro','cidade',
        'estado','email',
    ];
}
