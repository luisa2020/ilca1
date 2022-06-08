<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*llamdo de login y registro */ 
Auth::routes();
/*Rutas clientes*/ 
/*vistas sin id*/ 
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.create');
Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
/*vistas con id*/ 
Route::get('/clientes/show/{IdCliente}',[App\Http\Controllers\ClienteController::class, 'show'])->name('cliente.show');
Route::get('/clientes/edit/{IdCliente}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.edit');
Route::get('/clientes/show{IdCliente}',[App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit/{IdCliente}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
/*recibe get y post*/ 
Route::patch('/clientes/update', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
/*recibe post*/ 
Route::post('/clientes/store',[App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
/*para eliminar*/ 
Route::delete('/clientes/destroy/{IdCliente}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.destroy');

/* para guardar form*/
Route::post('/clientes',[ClienteController::class, 'guardar'])->name('empleadoGuardar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Rutas para proveedores*/

Route::get('/proveedores', [App\Http\Controllers\ProveedoreController::class, 'index'])->name('proveedore.index');
Route::get('/proveedores', [App\Http\Controllers\ProveedoreController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [App\Http\Controllers\ProveedoreController::class, 'create'])->name('proveedore.create');
Route::get('/proveedores/create', [App\Http\Controllers\ProveedoreController::class, 'create'])->name('proveedores.create');
Route::get('/proveedores/edit/{IdProveedor}', [App\Http\Controllers\ProveedoreController::class, 'edit'])->name('proveedore.edit');
Route::get('/proveedores/edit/{IdProveedor}', [App\Http\Controllers\ProveedoreController::class, 'edit'])->name('proveedores.edit');
Route::get('/proveedores/show/{IdProveedor}',[App\Http\Controllers\ProveedoreController::class, 'show'])->name('proveedore.show');
Route::get('/proveedores/show/{IdProveedor}',[App\Http\Controllers\ProveedoreController::class, 'show'])->name('proveedores.show');

/*recibe get y post*/ 
Route::patch('/proveedores/update', [App\Http\Controllers\ProveedoreController::class, 'update'])->name('proveedores.update');
/*recibe post*/ 
Route::post('/proveedores/store',[App\Http\Controllers\ProveedoreController::class, 'store'])->name('proveedores.store');
/*para eliminar*/ 
Route::delete('/proveedores/destroy/{IdProveedor}', [App\Http\Controllers\ProveedoreController::class, 'destroy'])->name('proveedores.destroy');
/* para guardar form*/
Route::post('/proveedores',[ProveedoreController::class, 'guardar'])->name('proveedoresGuardar');

/* Rutas para insumos*/
Route::get('/insumos', [App\Http\Controllers\InsumoController::class, 'index'])->name('insumo.index');
Route::get('/insumos', [App\Http\Controllers\InsumoController::class, 'index'])->name('insumos.index');
Route::get('/insumos/create', [App\Http\Controllers\InsumoController::class, 'create'])->name('insumo.create');
Route::get('/insumos/create', [App\Http\Controllers\InsumoController::class, 'create'])->name('insumos.create');
Route::get('/insumos/edit/{IdInsumo}', [App\Http\Controllers\InsumoController::class, 'edit'])->name('insumo.edit');
Route::get('/insumos/edit/{IdInsumo}', [App\Http\Controllers\InsumoController::class, 'edit'])->name('insumos.edit');
Route::get('/insumos/show/{IdInsumo}',[App\Http\Controllers\InsumoController::class, 'show'])->name('insumo.show');
Route::get('/insumos/show/{IdInsumo}',[App\Http\Controllers\InsumoController::class, 'show'])->name('insumos.show');

/*recibe get y post*/ 
Route::patch('/insumos/update', [App\Http\Controllers\InsumoController::class, 'update'])->name('insumos.update');
/*recibe post*/ 
Route::post('/insumos/store',[App\Http\Controllers\InsumoController::class, 'store'])->name('insumos.store');
/*para eliminar*/ 
Route::delete('/insumos/destroy/{IdInsumo}', [App\Http\Controllers\InsumoController::class, 'destroy'])->name('insumos.destroy');
/* para guardar form*/
Route::post('/insumos',[InsumoController::class, 'guardar'])->name('insumosGuardar');