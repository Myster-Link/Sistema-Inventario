<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('css')

    {{-- Estilos de Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-css/bootstrap.min.css') }}">

    {{-- Estilos css para la pagMain --}}
    <link rel="stylesheet" href="{!! asset('css/pagMain/pagPrincipal.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/pagMain/Facturar/section0.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/pagMain/Facturar/crearFactura.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/pagMain/Nav.css') !!}">

    {{-- Estilos Jquery UI --}}
    <link rel="stylesheet" href="{!! asset('Librerias/jquery-ui-1.13.1/jquery-ui.min.css') !!}">

    {{-- Scripts de FontAwesome --}}
    <script src="{{ asset('js/all.min.js') }}"></script>

    <title>
        @yield('title', 'Sistema de Inventario')
    </title>
</head>

<body>

    <header>
        <nav class="navbar navbar-light  navMain">
            <div class="container-fluid">

                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="offcanvas offcanvas-start nav_interior_top" tabindex="-1" id="offcanvasWithBackdrop"
                    aria-labelledby="offcanvasWithBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text" id="offcanvasWithBackdropLabel">Sistema de Inventario</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body nav_interior_bottom">
                        <ul>

                            <div class="contenedor-nav">

                                <li class="lista_inicio">
                                    <a class="nav-link active" href="{{ route('pagmain') }}">
                                        <i class="fa-solid fa-house"></i>Inicio
                                    </a>
                                </li>

                            </div>

                            <div class="contenedor-nav">

                                <li class="lista_inicio">
                                    <a class="nav-link active" href="{{ route('facturas.index') }}">
                                        <i class="fas fa-newspaper"></i>Facturar
                                    </a>
                                </li>

                            </div>

                            <div class="contenedor-nav">

                                <li class="lista_inicio" id="lista-inventario">
                                    <a class="nav-link" href="{{ route('inventario.index') }}">
                                        <i class="fas fa-box-open"></i>
                                        Inventario
                                    </a>
                                </li>

                            </div>

                            <div class="contenedor-nav">

                                <li class="lista_inicio" id="lista-cliente">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">
                                        <i class="fas fa-users"></i>
                                        Clientes
                                    </a>
                                </li>

                            </div>

                            <div class="contenedor-nav">

                                <li class="lista_inicio" id="lista-cliente">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-cog"></i>
                                        Configuracion
                                    </a>
                                </li>

                            </div>

                        </ul>
                    </div>

                    <div class="nav_footer">

                        <h5>
                            @if (auth()->user()->role_id)
                                {{ auth()->user()->role_id . ': ' . auth()->user()->name . ' ' . auth()->user()->apellidos }}
                            @else

                                Usuario: {{ auth()->user()->name . ' ' . auth()->user()->apellidos }}
                            @endif
                        </h5>

                    </div>

                    <div class="nav_footer">
                        <h5>Fecha: {{ date('m-d-Y') }}</h5>
                    </div>

                </div>

                <div class="dropdown">

                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name . ' ' . auth()->user()->apellidos }}
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-cog"></i> Configuracion</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-info-circle"></i> Saber mas</a></li>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li><button class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="fas fa-sign-out-alt"></i> Cerrar Sesion</button></li>
                        </form>

                    </ul>

                </div>

            </div>

        </nav>
    </header>



    <main id="main_principal">
        @yield('main')
    </main>

    <aside>
        @yield('aside')
    </aside>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4 section_footer">
                <!-- Facebook -->
                <a href="https://www.facebook.com/profile.php?id=100013702146324">
                    <img class="a_footer" src="{{ asset('images/iconos-footer/facebook-footer.svg') }}"
                        alt="facebook-footer">
                </a>

                <!-- Instagram -->
                <a href="#">
                    <img class="a_footer" src="{{ asset('images/iconos-footer/instagram-footer.svg') }}"
                        alt="instagram-footer">
                </a>

                <!-- Linkedin -->
                <a href="https://www.linkedin.com/in/christopher-felipe-fernández-barboza">
                    <img class="a_footer" src="{{ asset('images/iconos-footer/linkedin-footer.svg') }}"
                        alt="linkedin-footer">
                </a>
                <!-- Github -->
                <a href="https://github.com/Myster-Link">
                    <img class="a_footer" src="{{ asset('images/iconos-footer/github-footer.svg') }}"
                        alt="github-footer">
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://mysterlink.com/">MysterLink.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    {{-- Scripts Jquery UI --}}
    <script src={!! asset('Librerias/jquery-3.6.0.min.js') !!}></script>

    {{-- Scripts de Bootstrap --}}
    <script src="{{ asset('js/bootstrap-js/bootstrap.min.js') }}"></script>

    @yield('js')

</body>

</html>
