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

Route::get('/editarpaciente/{id}','PatientController@editarpaciente');
Route::post('/editarpaciente','PatientController@updatePaciente');


