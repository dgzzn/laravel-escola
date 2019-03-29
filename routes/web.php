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
    return view('app');
});


/*Route::get('/media', 'mediaController@index');
Route::post('/calcular-media', 'mediaController@calculo');*/


# /curso
Route::resource('/curso', 'cursoController');

#/disciplina
Route::resource('/disciplina', 'disciplinaController');

#/aluno
Route::resource('/aluno', 'alunoController');

# /professor
Route::resource('/professor', 'professorController');

