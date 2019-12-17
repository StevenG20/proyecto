<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/asesor', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/local', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/marcas', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/movimiento', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/productos', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/proveedor', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/rol', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/rolesusuario', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/usuarios', function (Request $request) {
    return $request->user();
});