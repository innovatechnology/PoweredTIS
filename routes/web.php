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
Route::get('/seguimiento', 'SeguimientoController@index');
Auth::routes();

Route::post('/exito', function()
	{return view('exito');
	;
});

//para el formulario de seguimiento
Route::get('/seguimiento/materia/registrar', 'SeguimientoController@registrarMateria');
Route::get('/seguimiento/materia/activar', 'SeguimientoController@activarMateria');
Route::get('/seguimiento/materia/modificar', 'SeguimientoController@modificarMateria');
Route::get('/seguimiento/materia/eliminar', 'SeguimientoController@eliminarMateria');

Route::get('/seguimiento/horario/registrar', 'SeguimientoController@registrarHorario');
Route::get('/seguimiento/horario/activar', 'SeguimientoController@activarHorario');
Route::get('/seguimiento/horario/modificar', 'SeguimientoController@modificarHorario');
Route::get('/seguimiento/horario/eliminar', 'SeguimientoController@eliminarHorario');

Route::get('/seguimiento/registrar/{docente}', 'SeguimientoController@registrarSeguimiento');
Route::get('/seguimiento/activar', 'SeguimientoController@activarSeguimiento');

//para ajax sobre la universidad

Route::get('/prueba', 'UniversidadController@prueba');
Route::get('/universidad/departamentos/{facultad}', 'UniversidadController@departamento');
Route::get('/universidad/carreras/{departamento}', 'UniversidadController@carrera');
Route::get('/universidad/materias', 'UniversidadController@materia');
Route::post('/ajax', function()
	{
		return response()->json(array('resultado' => "o yah"));
	});
