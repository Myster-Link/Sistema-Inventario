@extends('layouts.pagMain_plantilla')
@section('title', 'Crear Factura|Sistema De Inventario')

@section('main')

    <div id="Titulo_Facturar">
        <a href="{{ route('facturas.index') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear
            Facturas</a>
        <a href="{{ route('verfacturas') }}" class="btn btn-danger"><i class="fas fa-eye"></i> Ver Facturas</a>
    </div>

    <hr>

    <p class="btn_desplegable">
        <a class="btn btn-success " data-bs-toggle="collapse" href="#multiCollapseDatosCliente" role="button"
            aria-expanded="false" aria-controls="multiCollapseExample1">Datos del Cliente</a>
    </p>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseDatosCliente">
            <div class="card card-body btn_collapse">

                <div class="div-int-section">
                    <label>Tipo de Identificacion</label>
                    <br>
                    <select class="selects-section" name="">
                        <option value="">Nacional</option>
                        <option value="">Extrangero</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label>Identificacion</label>
                    <br>
                    <input type="number" name="" id="" class="inputs-section" placeholder="Identificacion">
                </div>

                <div class="div-int-section">
                    <label>Nombre</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Nombre" autofocus>
                </div>

                <div class="div-int-section">
                    <label>Primer Apellido</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Primer Apellido">
                </div>

                <div class="div-int-section">
                    <label>Segundo Apellido</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Segundo Apellido">
                </div>

                <div class="div-int-section">
                    <label>Correo Electronico</label>
                    <br>
                    <input type="email" name="" id="" class="inputs-section" placeholder="Correo Electronico">
                </div>

                <div class="div-int-section">
                    <label>Numero de Telefono</label>
                    <br>
                    <input type="number" name="" id="" class="inputs-section" placeholder="Numero de Telefono">
                </div>

                <div class="div-btn-section1">
                    <p>
                        <a class="btn btn-danger " data-bs-toggle="collapse" href="#multiCollapseBtnUbicacion" role="button"
                            aria-expanded="false" aria-controls="multiCollapseExample1">Agregar
                            Ubicacion</a>
                    </p>

                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseBtnUbicacion">
                            <div class="card card-body btn_collapse">

                                <div class="div-int-section">
                                    <label>Provincia</label>
                                    <br>
                                    <input type="text" name="" id="" class="inputs-section" placeholder="Provincia">
                                </div>

                                <div class="div-int-section">
                                    <label>Canton</label>
                                    <br>
                                    <input type="text" name="" id="" class="inputs-section" placeholder="Canton">
                                </div>

                                <div class="div-int-section">
                                    <label>Distrito</label>
                                    <br>
                                    <input type="text" name="" id="" class="inputs-section" placeholder="Distrito">
                                </div>

                                <div class="div-int-section">
                                    <label>Direccion Exacta</label>
                                    <br>
                                    <input type="text" name="" id="" class="inputs-section" placeholder="Direccion Exacta">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <p class="btn_desplegable">
        <a class="btn btn-success " data-bs-toggle="collapse" href="#multiCollapseInfoFactura" role="button"
            aria-expanded="false" aria-controls="multiCollapseExample1">Informacion de factura</a>

    </p>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseInfoFactura">
            <div class="card card-body btn_collapse">
                <div class="div-int-section">
                    <label>Tipo de Tramite:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">Ticket de Compra</option>
                        <option value="">Factura Electronica</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label>Tipo de Venta:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">Contado</option>
                        <option value="">Credito</option>
                        <option value="">Apartado</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label>Forma de pago:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">Efectivo</option>
                        <option value="">Tarjeta</option>
                        <option value="">Cheque</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label>Moneda de Venta:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">CRC</option>
                        <option value="">USD</option>
                        <option value="">EUR</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label>Observaciones (Comentario de Documento):</label>
                    <br>
                    <textarea rows="3" cols="30"></textarea>
                </div>
            </div>
        </div>
    </div>

    <p class="btn_desplegable">
        <a class="btn btn-success " data-bs-toggle="collapse" href="#multiCollapseCobroIva" role="button"
            aria-expanded="false" aria-controls="multiCollapseExample1">Cobro Iva</a>
    </p>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseCobroIva">
            <div class="card card-body btn_collapse">
                <div class="div-int-section">
                    <label for="">Tipo:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">IVA</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label for="">Tarifa:</label>
                    <br>
                    <select name="" class="selects-section">
                        <option value="">13%</option>
                    </select>
                </div>

                <div class="div-int-section">
                    <label for="">Tarifa Manual:</label>
                    <br>
                    <input type="text" class="inputs-section">

                </div>

            </div>
        </div>
    </div>

    <p class="btn_desplegable">
        <a class="btn btn-success " data-bs-toggle="collapse" href="#multiCollapseInfoProductos" role="button"
            aria-expanded="false" aria-controls="multiCollapseExample1">Informacion Productos</a>
    </p>

    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseInfoProductos">
            <div class="card card-body btn_collapse">
                <div class="div-int-section">
                    <label>Descripcion:</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Descripcion">
                </div>

                <div class="div-int-section">
                    <label>Cantidad:</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Cantidad">
                </div>

                <div class="div-int-section">
                    <label>Precio:</label>
                    <br>
                    <input type="text" name="" id="" class="inputs-section" placeholder="Precio">
                </div>

                <div class="div-int-section">
                    <label for="">Unidad de Medida:</label>
                    <br>
                    <select name="" class="selects-section">

                        <option value="">Servicios Profecionales</option>
                        <option value="">Unidades</option>

                    </select>
                </div>

                <p class="div-btn-section1 btn-infoProductos">
                    <a class="btn btn-primary ">Agregar Producto</a>
                </p>

                <p class="div-btn-section1 btn-infoProductos">
                    <a class="btn btn-secondary " href="{{ route('factura.pdf') }}"><i class="fa-solid fa-file-invoice"></i>
                        Crear Factura</a>
                </p>

            </div>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="row">id</th>
                <td colspan="2">Nombre</td>
                <td>Redes</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

@endsection
