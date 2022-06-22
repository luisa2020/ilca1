<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetallecompraController;


Route::get('/', function () {
    return view('welcome');
});
/*llamdo de login y registro */ 
Auth::routes();
/*Rutas clientes*/ 
Route::resource('clientes', ClienteController::class);

/* Estado*/
Route::get('UpdateStatusNoti', 'ClienteController@UpdateStatusNoti')->name('UpdateStatusNoti');
/* para guardar form*/
Route::post('/clientes',[ClienteController::class, 'guardar'])->name('clientesGuardar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Rutas para proveedores*/
Route::resource('proveedores', ProveedoreController::class);

/* para guardar form*/
Route::post('/proveedores',[ProveedoreController::class, 'guardar'])->name('proveedoresGuardar');
/*Actualizar*/ 
Route::put('/proveedores/actualizar/{IdProveedor}',[ProveedoreController::class, 'actualizar'])->name('proveedoresActualizar');

/* Rutas para insumos*/
Route::resource('insumos', InsumoController::class);

/*recibe get y post*/ 
Route::patch('/insumos/update', [App\Http\Controllers\InsumoController::class, 'update'])->name('insumos.update');
/*recibe post*/ 
Route::post('/insumos/store',[App\Http\Controllers\InsumoController::class, 'store'])->name('insumos.store');
/*para eliminar*/ 
Route::delete('/insumos/destroy/{IdInsumo}', [App\Http\Controllers\InsumoController::class, 'destroy'])->name('insumos.destroy');
/* para guardar form*/
Route::post('/insumos',[InsumoController::class, 'guardar'])->name('insumosGuardar');

/* Rutas para compra*/
Route::resource('compras', CompraController::class);
Route::post('/compras',[CompraController::class, 'guardar'])->name('comprasGuardar');
Route::get('compras/update', [App\Http\Controllers\CompraController::class, 'update'])->name('compras.update');
/* Rutas para detalle de compra */
Route::resource('detalleCompra', DetallecompraController::class);
Route::get('detalleCompra/create', [App\Http\Controllers\DetallecompraController::class, 'create'])->name('detallecompras.create');
Route::post('detalleCompra/store',[App\Http\Controllers\DetallecompraController::class, 'store'])->name('detallecompras.store');