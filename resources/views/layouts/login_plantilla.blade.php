<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Estilos de GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap"
        rel="stylesheet">

    {{-- Estilos css para el login y el register --}}
    <link rel="stylesheet" href="css/Auth/loginStyle.css">
    <link rel="stylesheet" href="css/Auth/registerStyle.css">

    <title>
        @yield('title', 'Iniciar Sesion')
    </title>

</head>

<body>

    <main>
        @yield('main')
    </main>

</body>

</html>
