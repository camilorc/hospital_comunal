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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@admin');

Route::get('/crearpaciente','AdminController@formularioPaciente');
Route::post('/crearPaciente','PatientController@crearPaciente');
Route::post('/eliminarPaciente','PatientController@eliminarPaciente');

Route::get('/editarpaciente/{id}','PatientController@editarpaciente');
Route::post('/editarpaciente','PatientController@updatePaciente');

Route::get('/creardoctor','DoctorController@formularioDoctor');
Route::post('/crearDoctor','DoctorController@crearDoctor');

Route::get('/editardoctor/{id}','DoctorController@editarDoctor');
Route::post('/editardoctor','DoctorController@updateDoctor');
Route::post('/eliminarDoctor','DoctorController@eliminarDoctor');

Route::post('/eliminarUsuario','UserController@eliminarUsuario');

Route::get('/director','DirectorController@directorIndex');

Route::get('/secretaria','SecretariaController@secretariaIndex');
Route::get('/agendaratencion/{id}','SecretariaController@formularioAgendar');
Route::post('/agendaratencion','SecretariaController@agendar');

Route::get('/editaratencion/{id}','SecretariaController@editarAtencion');
Route::post('/editarEstado','SecretariaController@cambiarEstado');

Route::get('/paciente','PatientController@pacienteIndex');

Route::get('buscarAtenciones', ['as' => 'buscarAtenciones', 'uses' => 'AttentionController@listarAtenciones']);

Route::get('/estadisticas','EstadisticasController@index');


