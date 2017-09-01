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

use App\Institution;
use App\Patient;

Route::get('/institutions','InstitutionController@index');
Route::get('/institutions/create','InstitutionController@create');
Route::get('/institutions/{id}','InstitutionController@show');
Route::post('/institutions','InstitutionController@store');

Route::get('/patients','PatientController@index');
Route::get('/patients/create','PatientController@create');
Route::get('/patients/{id}','PatientController@show');
Route::get('/patients/edit/{id}','PatientController@edit');
Route::post('/patients/{id}','PatientController@update');
Route::post('/patients','PatientController@store');
Route::get('/patients/destroy/{id}','PatientController@destroy');