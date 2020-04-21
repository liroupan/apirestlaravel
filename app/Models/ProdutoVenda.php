<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoVenda extends Model
{
    protected $fillable = [
        'produto','referencia','quantidade','valorUnitario','totalItem',
    ];
}
