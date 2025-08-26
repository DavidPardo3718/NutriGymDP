<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'precio',
        'stock',
        'categoria',
        'presentacion',
        'imagen',
        'activo'
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'activo' => 'boolean'
    ];
}