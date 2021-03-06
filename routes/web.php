<?php

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

Route::resource('asesor', 'AsesorController');
Route::resource('local', 'LocalController');
Route::resource('marcas', 'MarcasController');
Route::resource('movimiento', 'MovimientoController');
Route::resource('productos', 'ProductosController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('rol', 'RolController');
Route::resource('rolesusuario', 'RolesusuarioController');
Route::resource('usuarios', 'UsuariosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
