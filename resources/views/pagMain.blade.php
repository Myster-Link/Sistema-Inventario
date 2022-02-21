@extends('layouts.pagMain_plantilla')
@section('title', 'Bienvenido|Sistema De Inventario')

@section('css')
    <link rel="stylesheet" href="css/pagMain/pagMain.css">
@endsection

@section('main')

    <div class="div_pagMain">

        <div class="divs_pagMain">
            <h2> <i class="fas fa-newspaper"></i> Facturacion</h2>
            <hr>

            <ul>
                <li>Facturas Totales:</li>
                <li>Ultima Actualizacion:</li>
            </ul>

            <hr>

            <h2>Contenido:</h2>
            <ul>
                <li>Crear Facturas</li>
                <li>Ver Facturas</li>
            </ul>

            <a href="{{ route('facturas.index') }}" class="btn btn-warning">Detalles</a>
        </div>

        <div class="divs_pagMain">
            <h2> <i class="fas fa-box-open"></i> Inventario</h2>
            <hr>

            <ul>
                <li>Productos Totales:</li>
                <li>Ultima Actualizacion:</li>
            </ul>

            <hr>

            <h2>Contenido:</h2>
            <ul>
                <li>Agregar Productos</li>
                <li>Ver Productos</li>
            </ul>

            <a href="{{ route('inventario.index') }}" class="btn btn-warning">Detalles</a>
        </div>
        <div class="divs_pagMain">
            <h2> <i class="fas fa-users"></i> Clientes</h2>
            <hr>

            <ul>
                <li>Clientes Totales:</li>
                <li>Ultima Actualizacion:</li>
            </ul>

            <hr>

            <h2>Contenido:</h2>
            <ul>
                <li>Agregar Clientes</li>
                <li>Ver Clientes</li>
            </ul>

            <a href="{{ route('clientes.index') }}" class="btn btn-warning">Detalles</a>
        </div>
        <div class="divs_pagMain">
            <h2> <i class="fas fa-cog"></i> Configuracion</h2>
            <hr>

            <ul>
                <li>
                    @if (auth()->user()->role_id)
                        Rango: {{ ucfirst(auth()->user()->role_id) }}
                    @else

                        Rango: Usuario
                    @endif
                </li>
            </ul>

            <hr>
            <h2>Contenido:</h2>
            <ul>
                <li>Perfil</li>
                <li>Contacto</li>
                <li>Saber Mas</li>
            </ul>


            <a href="" class="btn btn-warning">Detalles</a>
        </div>

    </div>

@endsection
