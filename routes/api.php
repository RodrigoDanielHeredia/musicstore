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

Route::get('/disco/','DiscoController@show');
Route::get('/producto','ProductoController@show');
Route::get('/pelicula','PeliculaController@show');
Route::get('/cupon','CuponController@show');
Route::get('/usuario','UsuarioController@show');