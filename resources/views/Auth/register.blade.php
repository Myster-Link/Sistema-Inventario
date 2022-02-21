@extends('layouts.login_plantilla')
@section('title', 'Registrarse')

@section('main')

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="regis" id="radius-1">

            <label for="usuario">Usuario</label>
            <br>

            <input type="text" class="inputs" name="usuario" placeholder="Ingrese su usuario"
                value="{{ old('usuario') }}" autocomplete="off" autofocus>
            <br>
            <p class="mensage_error">@error('usuario'){{ '*' . $message }} @enderror</p>
            <br>

            <label for="password">Contraseña</label>
            <br>

            <input type="password" class="inputs" name="password" placeholder="Ingrese su contraseña">
            <br>
            <p class="mensage_error">@error('password'){{ '*' . $message }} @enderror</p>
            <br>

            <label for="name">Nombre</label>
            <br>

            <input type="text" class="inputs" name="name" placeholder="Ingrese su Nombre"
                value="{{ old('name') }}">
            <br>
            <p class="mensage_error">@error('name'){{ '*' . $message }} @enderror</p>
            <br>

        </div>

        <div class="regis" id="radius-2">

            <label for="apellidos">Apellidos</label>
            <br>

            <input type="text" class="inputs" name="apellidos" placeholder="Ingrese sus apelldos"
                value="{{ old('apellidos') }}">
            <br>
            <p class="mensage_error">@error('apellidos'){{ '*' . $message }} @enderror</p>

            <label for="email">Correo</label>
            <br>

            <input type="email" class="inputs" name="email" placeholder="Ingrese su correo"
                value="{{ old('email') }}">
            <br>
            <p class="mensage_error">@error('email'){{ '*' . $message }} @enderror</p>
            <br>

            <label for="telefono">Telefono</label>
            <br>

            <input type="tel" class="inputs" name="telefono" value="{{ old('telefono') }}"
                placeholder="Ingrese el numero de tel">
            <br>
            <p class="mensage_error">@error('telefono'){{ '*' . $message }} @enderror</p>
            <br>

            <input type="submit" name="regis-registrar" id="regis-registrar" value="Registrarse">
            <br>

            <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesion ya</a>

        </div>

    </form>

@endsection
