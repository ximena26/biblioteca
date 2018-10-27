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

Route::get('/', 'LoginController@index');

Route::resource('editorial', 'EditorialController');
Route::resource('consulta', 'ConsultaController');
Route::resource('menu', 'MenuController');
Route::resource('autor', 'AutorController');
Route::resource('categoria', 'CategoriaController');
Route::resource('libro', 'LibroController');
Route::resource('sede', 'SedeController');
Route::resource('ubicacion', 'UbicacionController');
Route::resource('ejemplar', 'EjemplarController');
Route::resource('tipoUsuario', 'TipoUsuarioController');
Route::resource('usuario', 'UsuarioController');
Route::resource('prestamo', 'PrestamoController');
Route::resource('facultad', 'FacultadController');
Route::resource('carrera', 'CarreraController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('docente', 'DocenteController');
Route::resource('jornada', 'JornadaController');
Route::resource('semestre', 'SemestreController');


Route::post('prestaEjemplar', [
    'as' => 'prestamo.ejemplar', 'uses' => 'PrestamoController@prestaEjemplar'
]);

Route::post('login', [
    'as' => 'login.login', 'uses' => 'LoginController@login'
]);


//Rutas de aplicacion movil

Route::post('app/login', ['as' => 'app.login', 'uses' => 'LoginController@appLogin']);

Route::post('app/filtro',  ['as' => 'app.filtro', 'uses' => 'EjemplarController@filtro']);



