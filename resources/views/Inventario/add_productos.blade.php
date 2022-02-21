@extends('layouts.pagMain_plantilla')
@section('title', 'AgregarProductos|Sistema De Inventario')

@section('css')

    <link rel="stylesheet" href="{!! asset('css/pagMain/Inventario/addProductos.css') !!}">
  

@endsection

@section('main')

    <div class="div_content_form">

        

        <form class="form_productos" action="{{ route('inventario.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <h1>Agregar Productos</h1>
                <a href="{{route('inventario.index')}}" class="btn btn-outline-danger btn_volver">Volver</a>
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <div class="div_form_producto">
                <label for="nombre_producto">
                    Nombre producto
                    <br>
                    <input type="text" name="nombre_producto" class="input_agregar" placeholder="Nombre producto"
                        value="{{ old('nombre_producto') }}">
                </label>
                <p class="mensage_error">@error('nombre_producto'){{ '*' . $message }} @enderror</p>

                <label for="codigo_producto">
                    Codígo producto
                    <br>
                    <input type="text" name="codigo_producto" class="input_agregar" placeholder="Codígo producto"
                        value="{{ old('codigo_producto') }}">
                </label>
                <p class="mensage_error">@error('codigo_producto'){{ '*' . $message }} @enderror</p>

                <label for="categoria_producto">
                    Categoría
                    <br>
                    <input type="text" name="categorias" class="input_agregar" placeholder="Categoría"
                        value="{{ old('categorias') }}">
                </label>

                <p class="mensage_error">@error('categorias'){{ '*' . $message }} @enderror</p>

                <label for="cantidad_producto">
                    Stock
                    <br>
                    <input type="number" name="stock" class="input_agregar" placeholder="Stock"
                        value="{{ old('stock') }}">
                </label>
                <p class="mensage_error">@error('stock'){{ '*' . $message }} @enderror</p>

            </div>


            <div class="div_form_producto">

                <label for="precio_producto">
                    Precio
                    <br>
                    <input type="number" name="precio" class="input_agregar" placeholder="Precio producto"
                        value="{{ old('precio') }}">

                </label>
                <p class="mensage_error">@error('precio'){{ '*' . $message }} @enderror</p>

                <label for="descripcion">
                    Descripción
                    <br>
                    <textarea name="descripcion" id="" cols="30" rows="2">{{ old('descripcion') }}</textarea>
                </label>
                <p class="mensage_error">@error('descripcion'){{ '*' . $message }} @enderror</p>

                <label for="imagen_producto">
                    Imagen
                    <br>
                    <input type="file" accept="image/*" name="ruta_imagen" value="{{ old('ruta_imagen') }}">
                </label>
                <p class="mensage_error">@error('ruta_imagen'){{ '*' . $message }} @enderror</p>

                <button class="btn btn-outline-primary btn_productos">Guardar</button>
            </div>

        </form>

    </div>

@endsection
