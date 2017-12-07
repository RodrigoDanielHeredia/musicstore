<?php

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Resources\Usuario as UsuarioResource;

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

Route::get('/discos','DiscoController@show');
Route::get('/productos','ProductoController@show');
Route::get('/peliculas','PeliculaController@show');
Route::get('/cupons','CuponController@show');
Route::get('/usuarios/{id}','UsuarioController@show');
Route::get('/generos','GeneroController@show');
Route::post('/login',function (){

});