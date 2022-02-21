@extends('layouts.pagMain_plantilla')
@section('title', 'Inventario|Sistema De Inventario')

@section('css')

    {{-- Estilos css --}}
    <link rel="stylesheet" href="{!! asset('css/pagMain/Inventario/inventario.css') !!}">

    {{-- Css Jquery DataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

@endsection

@section('main')

    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid">

            <a class="navbar-brand titulo_productos">Listado de Productos</a>

        </div>
    </nav>

    <p class="btn_desplegable">
        <a class="btn btn-success " href="{{ route('inventario.create') }}">
            <i class="fas fa-plus-square"></i> Agregar Productos</a>
    </p>

    <div class="card">
        <div class="card-body">

            <table class="table table-striped dt-responsive nowrap" id="tabla_productos">
                <thead>
                    <tr>
                        <th>Nombre:</th>
                        <th>Codigo:</th>
                        <th>Categorias:</th>
                        <th>Stock:</th>
                        <th>Precio:</th>
                        <th>Descripcion:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($inventarios as $inventario)
                        <tr>
                            <td>{{ $inventario->nombre_producto }}</td>
                            <td>{{ $inventario->codigo_producto }}</td>
                            <td>{{ $inventario->categorias }}</td>
                            <td>{{ number_format($inventario->stock) }}</td>
                            <td>{{ '₡' . number_format($inventario->precio) }}</td>
                            <td>{{ $inventario->descripcion }}</td>
                            <td>
                                <form action="{{ route('inventario.destroy', $inventario->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('inventario.show', $inventario->id) }}" class="btn btn-primary"><i
                                            class="fa-solid fa-pager"></i></a>

                                    <a href="{{ 'inventario/' . $inventario->id . '/edit' }}" class="btn btn-success">
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
