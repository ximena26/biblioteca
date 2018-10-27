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
Route::prefix('/editorial')->group(function () {
    
    Route::get('/', 'editorialController@listar'); //todas las editoriales
    Route::post('/', 'editorialController@crear'); //crear editorial 
    Route::put('/{id}', 'editorialController@actualizar'); //actualizar editorial
    Route::delete('/{id}', 'editorialController@eliminar'); //eliminar editorial
    Route::get('/{id}', 'editorialController@encontrar'); //encontrar una editorial
    
});

Route::prefix('/autor')->group(function () {
    
    Route::get('/', 'autorController@listar'); 
    Route::post('/', 'autorController@crear'); 
    Route::put('/{id}', 'autorController@actualizar'); 
    Route::delete('/{id}', 'autorController@eliminar');
    Route::get('/{id}', 'autorController@encontrar');
    
});