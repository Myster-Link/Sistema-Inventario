<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre_producto',
        'codigo_producto',
        'categorias',
        'stock',
        'precio',
        'descripcion',
        'ruta_imagen',
    ];

    static $rules = [
        'nombre_producto' => ['required', 'string'],
        'codigo_producto' => ['required', 'string'],
        'categorias' => ['required', 'string'],
        'stock' => ['required', 'integer'],
        'precio' => 'required',
        'descripcion' => ['required', 'string'],
        'ruta_imagen' => 'max:2048',
    ];

    //Relacion uno a muchos (inversa)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getRouteKeyName()
    {
        return 'codigo_producto';
    }
}
