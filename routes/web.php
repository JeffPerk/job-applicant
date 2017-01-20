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

Route::get('/home', 'HomeController@index');
Route::get('/applicant/{user}', 'ApplicantController@show');

Route::group(['middleware' => ['auth', 'admin']], function() {
  Route::get('/admin', 'AdminController@index');
});

Route::get('/new-applicant/{user}/edit', 'ApplicantFormController@edit');
Route::patch('/new-applicant/{user}', 'ApplicantFormController@update');

Route::get('/applicant', 'ApplicantController@index');
Route::get('/practice', 'PracticeController@index');

Route::get('/new-admin', 'AdminController@create');
Route::post('/new-admin', 'AdminController@store');

Route::get('/new-job', 'JobController@create');
Route::post('/new-job', 'JobController@store');
