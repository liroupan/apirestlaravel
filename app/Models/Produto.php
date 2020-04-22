<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'produto','referencia','codBarra','precoVenda','precoCompra','estoque','unidadeMedida','fabricante',
        'fornecedor','grupo','softshopId'
    ];
}
