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
# precisa criar essa rota pq por algum motivo n dá pra deletar por DELETE, então tem que ser por GET
Route::get('/curso/{id}/delete', 'cursoController@destroy');

#/disciplina
Route::resource('/disciplina', 'disciplinaController');
Route::get('/disciplina/{id}/delete', 'disciplinaController@destroy');

#/aluno
Route::resource('/aluno', 'alunoController');
Route::get('/aluno/{id}/delete', 'alunoController@destroy');

# /professor
Route::resource('/professor', 'professorController');
Route::get('/professor/{id}/delete', 'professorController@destroy');

#/turma
Route::resource('/turma', 'turmaController');
Route::get('/turma/{id}/delete', 'turmaController@destroy');

#turma_aluno
Route::resource('/turma_aluno', 'turmaalunoController');
Route::get('/turma_aluno/{id}/delete', 'turmaalunoController@destroy');



