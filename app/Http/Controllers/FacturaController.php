<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function index()
    {
        return view('Facturar.crearFactura');
    }

    public function verFacturas()
    {
        return view('Facturar.verFactura');
    }

    public function facturaPdf()
    {
        return view('Facturar.facturaPdf');
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }

    public function destroy($id)
    {
    }
}
