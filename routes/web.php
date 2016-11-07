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
Route::get('usuarios/editar', 'RolFuncionController@editarUsuarios');
Route::post('usuarios/eliminar', 'RolFuncionController@eliminarUsuarios');
Route::post('usuarios/guardar', 'RolFuncionController@guardarUsuarios');