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

route::get('curso/edit/{curso}', 'CursoController@edit');
route::get('cursos/listacursos', 'CursoController@list');
Route::get('cursos/crear','CursoController@create');

route::get('curso', 'CursoController@index');
route::get('curso/{id}', 'CursoController@show');
route::post('cursos', 'CursoController@store');
route::patch('curso/{curso}', 'CursoController@update');
route::delete('curso/{curso}', 'CursoController@destroy');