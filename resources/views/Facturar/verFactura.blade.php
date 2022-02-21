@extends('layouts.pagMain_plantilla')
@section('title', 'Ver Factura|Sistema De Inventario')

@section('main')

<div id="Titulo_Facturar">
    <a href="{{route('facturas.index')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear Facturas</a>
    <a href="{{route('verfacturas')}}" class="btn btn-danger"><i class="fas fa-eye"></i> Ver Facturas</a>
</div>

@endsection