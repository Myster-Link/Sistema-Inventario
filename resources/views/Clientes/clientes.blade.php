@extends('layouts.pagMain_plantilla')
@section('title', 'Clientes|Sistema De Inventario')

@section('css')

    {{-- Estilos css --}}
    <link rel="stylesheet" href="css/pagMain/Clientes/clientes.css">

    {{-- Css Jquery DataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">


@endsection

@section('main')

    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid">

            <a class="navbar-brand titulo_productos">Listado de Clientes</a>

        </div>
    </nav>

    <p class="btn_desplegable">
        <a class="btn btn-success " href="{{ route('clientes.create') }}">
            <i class="fas fa-plus-square"></i> Agregar Clientes</a>
    </p>

    <div class="card">
        <div class="card-body">

            <table class="table table-striped dt-responsive nowrap" id="tabla_productos">
                <thead>
                    <tr>
                        <th>Tipo de Identificacion:</th>
                        <th>Identificacion:</th>
                        <th>Nombre:</th>
                        <th>Apellidos:</th>
                        <th>Email:</th>
                        <th>Telefono:</th>
                        <th>provincia:</th>
                        <th>canton:</th>
                        <th>distrito:</th>
                        <th>Ubicacion Exacta:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->tipo_identificacion }}</td>
                            <td>{{ $cliente->identificacion }}</td>
                            <td>{{ $cliente->nombre_cliente }}</td>
                            <td>{{ $cliente->primer_apellido . ' ' . $cliente->segundo_apellido }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->numero_telefono }}</td>
                            <td>{{ $cliente->provincia }}</td>
                            <td>{{ $cliente->canton }}</td>
                            <td>{{ $cliente->distrito }}</td>
                            <td>{{ $cliente->ubicacion_exacta }}</td>
                            <td>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary"><i
                                            class="fa-solid fa-pager"></i></a>

                                    <a href="{{ 'clientes/' . $cliente->id . '/edit' }}" class="btn btn-success">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

@endsection

@section('js')

    {{-- Scripts Jquery DataTables --}}
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>


    <script>
        $('#tabla_productos').DataTable({
            reponsive: true,
            autoWidth: false,

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                'search': 'Buscar:',
                'paginate': {
                    'next': 'Siguiente',
                    'previous': 'Anterior'
                }
            }
        });
    </script>

@endsection
