@extends('layouts.login_plantilla')

@section('main')

    <div id="sasa">
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div name="info-login" id="info-login">
                <h1>Iniciar Sesion</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At earum sunt nisi qui voluptatum magni
                    autem!
                    Cum ullam libero rem quibusdam enim. Harum voluptatibus,
                    quisquam velit dicta molestiae impedit cumque.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deleniti laborum corrupti fugit
                    dolores
                    vitae optio, asperiores veritatis inventore officia itaque, autem beatae aperiam numquam repellendus
                    magni quam ex praesentium?
                </p>
            </div>

            <div name="input-login" id="input-login">
                <h1 id="h1-iniciarSesion">Iniciar Sesion</h1>

                <label for="usuario">Usuario</label>
                <br>

                <input type="text" class="inputs" name="usuario" placeholder="Ingrese su usuario"
                    value="{{ old('usuario') }}" autofocus>
                <br>
                <p class="mensage_error">@error('usuario'){{ '*' . $message }} @enderror</p>

                <label for="password">Contraseña</label>
                <br>

                <input type="password" class="inputs" name="password" placeholder="Ingrese su contraseña">
                <br>
                <p class="mensage_error">@error('password'){{ '*' . $message }} @enderror</p>

                <input type="submit" name="input-iniciar" id="input-iniciar" value="Iniciar Sesion">
                <br>

                @if (session('Login_Incorrecto'))
                    <p class="mensage_error">{{ '*' . session('Login_Incorrecto') }}</p>
                @endif
                <br>

                <a href="">¿Olvidastes la contraseña?</a>
                <br>
                <a href="{{ route('register') }}">¿Quieres registrarse?</a>
            </div>
        </form>
    </div>
@endsection
