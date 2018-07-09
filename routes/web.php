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
    // return view('nominate');
    return redirect()->route('nominate');
});

Auth::routes();

// protected routes
// Route::group(['middleware' => ['auth']], function() {
Route::get('/schools/{name}', 'NominationController@getSchool');
Route::post('/submit-nomination', 'NominationController@create')->name('submit-nomination');
Route::get('/submitted', 'NominationController@submitted')->name('submitted');
Route::get('/isNameRecorded/{name}', 'NominationController@isNameRecorded');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nominate','NominationController@index')->name('nominate');
