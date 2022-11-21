<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/appstore','ApplicationController@store')->name('application.store');
Route::post('/storecode','ApplicationController@storecode')->name('application.storecode');
Route::post('/storeother','ApplicationController@storeother')->name('application.storeother');

Route::get('/users_login','UserController@users_login')->name('users.users_login');
Route::post('/user_login','UserController@user_login')->name('users.user_login');


Route::get('register', function () {
    return view('register.register2');
});
// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware(['auth'])->name('dashboard');
Route::middleware('auth:application,web')->group(function () {
  Route::post('/user_logout','UserController@user_logout')->name('users.user_logout');


    Route::get('/','DashbaordController@index')->name('dashboard.index');

    Route::get('/users','UserController@index')->name('users.index');
    Route::get('/users/create','UserController@create')->name('users.create');
    Route::post('users/','UserController@store')->name('users.store'); 
    Route::get('users/{id}/edit','UserController@edit')->name('users.edit');
    Route::put('users/{id}','UserController@update')->name('users.update');
    Route::delete('users/{id}','UserController@destroy')->name('users.destroy');
 
    Route::get('/services','ServiceController@index')->name('services.index');
    Route::get('/services/create','ServiceController@create')->name('services.create');
    Route::post('services/','ServiceController@store')->name('services.store');
    Route::get('services/{id}/edit','ServiceController@edit')->name('services.edit');
    Route::put('services/{id}','ServiceController@update')->name('services.update');
    Route::delete('services/{id}','ServiceController@destroy')->name('services.destroy');
    
    Route::get('/applications','ApplicationController@index')->name('applications.index');
    Route::get('/applications/export','ApplicationController@export')->name('applications.export');
    Route::get('/applications/{id}/show','ApplicationController@show')->name('applications.show');
    Route::get('/applications/{id}/print','ApplicationController@print')->name('applications.print');
    Route::put('applications/{id}','ApplicationController@update')->name('applications.update');
    Route::put('/applications/{id}/comment','ApplicationController@comment')->name('applications.comment');
    Route::get('/applications/{id}/researcher','ApplicationController@researcher')->name('applications.researcher');
    Route::delete('applications/{id}','ApplicationController@destroy')->name('applications.destroy');
    Route::post('/applications/search','ApplicationController@search')->name('applications.search');
    Route::get('/applications/{id}/edit','ApplicationController@edit_admin')->name('applications.edit_admin');
    Route::post('/applications/{id}/post_admin','ApplicationController@post_admin')->name('applications.post_admin');
    Route::post('/applications/create_admin','ApplicationController@create_admin')->name('applications.create_admin');
    Route::get('/applications/git_admin','ApplicationController@git_admin')->name('applications.git_admin');



    Route::POST('/applications/{id}/researcher','AppResearcherController@store')->name('researcher.store');
    Route::get('/researcher/{id}/{app}/print','AppResearcherController@print')->name('researcher.print');


      Route::get('/patient','PatientController@index')->name('patient.index');
    Route::get('/patient/create/{id}','PatientController@create')->name('patient.create');
    Route::post('patient/store','PatientController@store')->name('patient.store');
    Route::get('patient/{id}/edit','PatientController@edit')->name('patient.edit');
    Route::put('patient/{id}','PatientController@update')->name('patient.update');
    Route::delete('patient/{id}','PatientController@destroy')->name('patient.destroy');
    Route::get('/patient/{id}/print','PatientController@print')->name('patient.print');
    Route::post('/patient/search','PatientController@search')->name('patient.search');

    Route::get('/baptism_request','BaptismRequestController@index')->name('baptism_request.index');
    Route::get('/baptism_request/create/{id}','BaptismRequestController@create')->name('baptism_request.create');
    Route::post('baptism_request/store','BaptismRequestController@store')->name('baptism_request.store');
    Route::get('baptism_request/{id}/edit','BaptismRequestController@edit')->name('baptism_request.edit');
    Route::put('baptism_request/{id}','BaptismRequestController@update')->name('baptism_request.update');
    Route::delete('baptism_request/{id}','BaptismRequestController@destroy')->name('baptism_request.destroy');
    Route::get('/baptism_request/{id}/print','BaptismRequestController@print')->name('baptism_request.print');
    Route::post('/baptism_request/search','BaptismRequestController@search')->name('baptism_request.search');




    Route::get('/archive','ArchiveController@index')->name('archive.index');
    // Route::get('/applications/export','ApplicationController@export')->name('applications.export');
    Route::get('/archive/{id}/show','ArchiveController@show')->name('archive.show');
    Route::get('/archive/{id}/print','ApplicationController@print')->name('archive.print');
    // Route::put('applications/{id}','ApplicationController@update')->name('applications.update');
    // Route::put('/applications/{id}/comment','ApplicationController@comment')->name('applications.comment');
    // Route::get('/applications/{id}/researcher','ApplicationController@researcher')->name('applications.researcher');
    // Route::delete('applications/{id}','ApplicationController@destroy')->name('applications.destroy');
    Route::post('/archive/search','ArchiveController@search')->name('archive.search');
    Route::get('/archive/{id}/archive','ArchiveController@archive')->name('archive.archive_accepte');
    Route::put('/archive/{id}/status','ArchiveController@status')->name('archive.status');



    Route::get('/finance','FinanceController@index')->name('finance.index');
    Route::get('/finance/create/{id}','FinanceController@create')->name('finance.create');
    Route::post('finance/store','FinanceController@store')->name('finance.store');
    Route::get('finance/{id}/edit','FinanceController@edit')->name('finance.edit');
    Route::put('finance/{id}','FinanceController@update')->name('finance.update');
    Route::delete('finance/{id}','FinanceController@destroy')->name('finance.destroy');
    Route::get('/finance/{id}/print','FinanceController@print')->name('finance.print');
    Route::post('/finance/search','FinanceController@search')->name('finance.search');



});

require __DIR__.'/auth.php';
