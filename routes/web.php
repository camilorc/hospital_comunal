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

Route::get('/accesodenegado',function(){
	return view('accesodenegado');
});

/*Rutas del Administrador*/


Route::group(['middleware' => ['auth','admin']], function () {
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
});

/*FIN Rutas del Administrador*/

/*Rutas del director */
Route::group(['middleware' => ['auth','director']], function () {
	Route::get('/director','DirectorController@directorIndex');
	Route::get('/estadisticas','EstadisticasController@index');
});
/*FIN Rutas del director */


/*Rutas de la secretaria */
Route::group(['middleware' => ['auth','secretaria']], function () {
	Route::get('/secretaria','SecretariaController@secretariaIndex');
	Route::get('/agendaratencion/{id}','SecretariaController@formularioAgendar');
	Route::post('/agendaratencion','SecretariaController@agendar');

	Route::get('/editaratencion/{id}','SecretariaController@editarAtencion');
	Route::post('/editarEstado','SecretariaController@cambiarEstado');
});
/*FIN Rutas de la secretaria */

Route::get('/paciente','PatientController@pacienteIndex');

Route::get('buscarAtenciones', ['as' => 'buscarAtenciones', 'uses' => 'AttentionController@listarAtenciones']);




