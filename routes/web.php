<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('roles', 'RolFuncionController@roles');
Route::get('roles/editar/{nombre}', 'RolFuncionController@editarRoles');
Route::get('roles/crear', 'RolFuncionController@crearRoles');
Route::post('roles/guardar', 'RolFuncionController@guardarRoles');

Route::get('funciones', 'RolFuncionController@funciones');
Route::get('funciones/editar/{nombre}', 'RolFuncionController@editarFunciones');
Route::get('funciones/crear', 'RolFuncionController@crearFunciones');
Route::post('funciones/guardar', 'RolFuncionController@guardarFunciones');

Route::get('usuarios', 'RolFuncionController@usuarios');
Route::get('usuarios/editar/{nombre_usuario}', 'RolFuncionController@editarUsuarios');
Route::get('usuarios/eliminar/{login}', 'RolFuncionController@eliminarUsuarios');
Route::post('usuarios/guardar', 'RolFuncionController@guardarUsuarios');

Route::resource('blog','BlogController');
Route::get('/', function () {
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
Route::get('blog/{id}/edit', 'BlogController@edit');
Route::get('blog/store', 'BlogController@store');
Route::get('/nombramiento', 'NombramientoController@index');
Auth::routes();
