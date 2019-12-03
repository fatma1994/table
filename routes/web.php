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
  


Route::get('/administration', function () {
    return view('administration');
});

Route::get('/page', function () {
    return view('page');
});

//Route::get("/elev","ElevesController@create");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Eleve','ElevesController');

