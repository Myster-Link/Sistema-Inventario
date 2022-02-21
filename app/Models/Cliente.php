<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo_identificacion',
        'identificacion',
        'nombre_cliente',
        'primer_apellido',
        'segundo_apellido',
        'email',
        'numero_telefono',
        'provincia',
        'canton',
        'distrito',
        'ubicacion_exacta',
    ];

    static $rules = [
        'tipo_identificacion' => ['required', 'string'],
        'identificacion' => ['required', 'max:9', 'string'],
        'nombre_cliente' => ['required', 'string'],
        'primer_apellido' => ['required', 'string'],
        'segundo_apellido' => ['required', 'string'],
        'email' => 'required|email',
        'numero_telefono' => ['required', 'integer'],
    ];

    //Relacion uno a muchos (inversa)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
