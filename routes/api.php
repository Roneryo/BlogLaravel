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
    Route::get('/posts','PostController@index');
    Route::post('/posts','PostController@store');
    Route::put('/posts/{id}','PostController@update');
    Route::get('/posts/{id}','PostController@show');
    Route::put('/posts/{id}/disable','PostController@disable');
    //Comentarios asociados con la publicacion
    Route::get('/posts/{id}/comments','PostController@comments');

    //Ruta de comentarios
    Route::get('/comments','CommentController@index');
    Route::post('/comments','CommentController@store');
    Route::put('/comments/{id}','CommentController@update');
    Route::get('/comments/{id}','CommentController@show');
    Route::put('/comments/{id}/disable','CommentController@disable');
