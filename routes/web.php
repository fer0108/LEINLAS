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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

  
Auth::routes();
Route::get('/inicio', 'InicioController@index');
route::get('curso/edit/{curso}', 'CursoController@edit');
route::get('cursos/listacursos', 'CursoController@list')->name('listacursos');
Route::get('cursos/crear','CursoController@create');

route::get('curso', 'CursoController@index');
route::get('curso/{id}', 'CursoController@show');
route::post('cursos', 'CursoController@store');
route::patch('curso/{curso}', 'CursoController@update');
route::delete('curso/{curso}', 'CursoController@destroy');

Route::group(['middleware' => ['role:SuperAdmin|Registro']], function () {
    Route::get('roles/create', function () {
        return view('roles/create');
    });
    Route::get('consultas-usuarios', 'ConsultasUsuarios@index');

    Route::resource('roles', 'RolesController');
    Route::resource('permisos', 'PermisosController');
    Route::delete('permisos/delete-role/{role}/{permission}', 'PermisosController@deleteRole')->name('permisos.delete.role');

    Route::get('consultas-roles', 'ConsultasRoles@index');
    Route::get('consultas-permisos', 'ConsultasPermisos@index');
    Route::get('consultas-usuarios', 'ConsultasUsuarios@index');
});

