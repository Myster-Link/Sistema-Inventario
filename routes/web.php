<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ClienteController;

//Rutas Pagina Sistema Facturacion
Route::view('/pagmain', 'pagMain')->name('pagmain');

//Rutas de Auth
/*Login*/
Route::get('/', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'store'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
/*Register*/
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

//Rutas Facturas
Route::resource('/facturas', FacturaController::class)
    ->middleware('auth')
    ->names('facturas');
Route::get('/verfacturas', [FacturaController::class, 'verFacturas'])->name('verfacturas')->middleware('auth');
Route::get('/factura/pdf', [FacturaController::class, 'facturaPdf'])->name('factura.pdf')->middleware('auth');

//Rutas Inventarios
Route::resource('/inventario', InventarioController::class)
    ->middleware('auth')
    ->names('inventario')
    ->parameters(['inventario' => 'id']);

//Rutas Clientes

Route::resource('/clientes', ClienteController::class)
    ->middleware('auth')
    ->names('clientes')
    ->parameters(['clientes' => 'id']);

//Artisan migrate
Route::get('/artisan/cache', function () {
    Artisan::call('migrate:fresh');
    return redirect('/');
});

Route::get('/cmd/{$command}', function ($command) {
    Artisan::call($command);
    dd(Artisan::output());
});
