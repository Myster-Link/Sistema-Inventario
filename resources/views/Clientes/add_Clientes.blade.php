@extends('layouts.pagMain_plantilla')
@section('title', 'AgregarClientes|Sistema De Inventario')

@section('css')

    <link rel="stylesheet" href="{!! asset('css/pagMain/Clientes/addClientes.css') !!}">

@endsection

@section('main')

    <div class="div_content_form">

        <form class="form_productos" action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <h1>Agregar Clientes</h1>
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-danger btn_volver">Volver</a>
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">


            <div class="div_form_producto">
                <label class="div-int-section">
                    Tipo de Identificacion
                    <br>
                    <select class="selects-section" name="tipo_identificacion">
                        <option value="Nacional">Nacional</option>
                        <option value="Extrangero">Extrangero</option>
                    </select>
                </label>
                <p class="mensage_error">@error('tipo_identificacion'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Identificacion
                    <br>
                    <input type="number" name="identificacion" class="inputs-section" placeholder="Identificacion"
                        value="{{ old('identificacion') }}" autofocus>
                </label>
                <p class="mensage_error">@error('identificacion'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Nombre
                    <br>
                    <input type="text" name="nombre_cliente" class="inputs-section" placeholder="Nombre"
                        value="{{ old('nombre_cliente') }}">
                </label>
                <p class="mensage_error">@error('nombre_cliente'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Primer Apellido
                    <br>
                    <input type="text" name="primer_apellido" class="inputs-section" placeholder="Primer Apellido"
                        value="{{ old('primer_apellido') }}">
                </label>
                <p class="mensage_error">@error('primer_apellido'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Segundo Apellido
                    <br>
                    <input type="text" name="segundo_apellido" class="inputs-section" placeholder="Segundo Apellido"
                        value="{{ old('segundo_apellido') }}">
                </label>
                <p class="mensage_error">@error('segundo_apellido'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Correo Electronico
                    <br>
                    <input type="email" name="email" class="inputs-section" placeholder="Correo Electronico"
                        value="{{ old('email') }}">
                </label>
                <p class="mensage_error">@error('email'){{ '*' . $message }} @enderror</p>
            </div>

            <div class="div_form_producto">
                <label class="div-int-section">
                    Numero de Telefono
                    <br>
                    <input type="number" name="numero_telefono" class="inputs-section" placeholder="Numero de Telefono"
                        value="{{ old('numero_telefono') }}">
                </label>
                <p class="mensage_error">@error('numero_telefono'){{ '*' . $message }} @enderror</p>


                <label class="div-int-section">
                    Provincia
                    <br>
                    <input type="text" name="provincia" class="inputs-section" placeholder="Provincia"
                        value="{{ old('provincia') }}">
                </label>
                <p class="mensage_error">@error('provincia'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Canton
                    <br>
                    <input type="text" name="canton" class="inputs-section" placeholder="Canton"
                        value="{{ old('canton') }}">
                </label>
                <p class="mensage_error">@error('canton'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Distrito
                    <br>
                    <input type="text" name="distrito" class="inputs-section" placeholder="Distrito"
                        value="{{ old('distrito') }}">
                </label>
                <p class="mensage_error">@error('distrito'){{ '*' . $message }} @enderror</p>

                <label class="div-int-section">
                    Direccion Exacta
                    <br>
                    <input type="text" name="ubicacion_exacta" class="inputs-section"
                        value="{{ old('ubicacion_exacta') }}" placeholder="Direccion Exacta">
                </label>
                <p class="mensage_error">@error('ubicacion_exacta'){{ '*' . $message }} @enderror</p>


                <button class="btn btn-outline-primary btn_productos">Guardar</button>
            </div>

        </form>

    </div>

@endsection
