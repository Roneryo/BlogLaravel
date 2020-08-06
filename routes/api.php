<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    //Ruta de usuarios
    Route::get('/users','UserController@index');
    Route::post('/users','UserController@store');
    Route::put('/users/{id}','UserController@update')->where(array('id'=>'[1-9]'));
    Route::get('/users/{id}','UserController@show')->where(array('id'=>'[1-9]'));
    Route::put('/users/{id}/disable','UserController@inactive')->where(array('id'=>'[1-9]'));
    //Ruta de publicaciones
    Route::get('/posts','PublicacionesController@index');
    Route::post('/posts','PublicacionesController@store');
    Route::put('/posts/{id}','PublicacionesController@update');
    Route::get('/posts/{id}','PublicacionesController@show');
    Route::put('/posts/{id}/disable','PublicacionesController@disable');
    //Ruta de comentarios
    Route::get('/comments','ComentariosController@index');
    Route::post('/comments','ComentariosController@store');
    Route::put('/comments/{id}','ComentariosController@update');
    Route::get('/comments/{id}','ComentariosController@show');
    Route::put('/comments/{id}/disable','ComentariosController@disable');
