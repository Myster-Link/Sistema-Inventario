<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelos
use App\Models\Inventario;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all();
        return view('Inventario.inventario', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inventario.add_productos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Verificacion de los dados a subir
        $Datos = request()->validate(Inventario::$rules);

        //Procedo a guardar todo en la variable
        $Datos = $request->all();

        //Verificamos si hay un nombre de imagen y subimos la imagen
        if ($archivo = $request->file('ruta_imagen')) {

            $nombre = $archivo->getClientOriginalName();
            $archivo->move('Images', $nombre);
            $Datos['ruta_imagen'] = $nombre;
        }

        Inventario::create($Datos);

        return redirect(route('inventario.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);
        return view('Inventario.show_Inventario', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);
        return view('Inventario.edit_Inventario', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);

        request()->validate(Inventario::$rules);

        $inventario->update($request->all());

        return redirect(route('inventario.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        $inventario->delete();

        return redirect(route('inventario.index'));
    }
}
