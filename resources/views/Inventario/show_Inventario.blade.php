@extends('layouts.pagMain_plantilla')
@section('title', 'AgregarProductos|Sistema De Inventario')

@section('css')

    <link rel="stylesheet" href="{!! asset('css/pagMain/Inventario/addProductos.css') !!}">


@endsection

@section('main')

    <div class="div_content_form">



        <form class="form_productos" action="/inventario/{{ $inventario->id }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <h1>Detalle Productos</h1>
                <a href="{{ route('inventario.index') }}" class="btn btn-outline-danger btn_volver">Volver</a>
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <div class="div_form_producto">
                <label for="nombre_producto">
                    Nombre producto
                    <br>
                    <input type="text" name="nombre_producto" class="input_agregar" placeholder="Nombre producto"
                        value="{{ $inventario->nombre_producto }}">
                </label>
                <br>

                <label for="codigo_producto">
                    Codígo producto
                    <br>
                    <input type="text" name="codigo_producto" class="input_agregar" placeholder="Codígo producto"
                        value="{{ $inventario->codigo_producto }}">
                </label>
                <br>

                <label for="categoria_producto">
                    Categoría
                    <br>
                    <input type="text" name="categorias" class="input_agregar" placeholder="Categoría"
                        value="{{ $inventario->categorias }}">
                </label>
                <br>

                <label for="cantidad_producto">
                    Stock
                    <br>
                    <input type="number" name="stock" class="input_agregar" placeholder="Stock"
                        value="{{ $inventario->stock }}">
                </label>

            </div>


            <div class="div_form_producto">

                <label for="precio_producto">
                    Precio
                    <br>
                    <input type="number" name="precio" class="input_agregar" placeholder="Precio producto"
                        value="{{ $inventario->precio }}">

                </label>
                <br>

                <label for="descripcion">
                    Descripción
                    <br>
                    <textarea name="descripcion" id="" cols="30" rows="2">{{ $inventario->descripcion }}</textarea>
                </label>
                <br>

                <img src="{{ asset('Images/' . $inventario->ruta_imagen) }}" alt="">

            </div>

            <div class="div_form_producto">
               
            </div>


        </form>

    </div>

@endsection
