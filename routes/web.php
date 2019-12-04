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
  


/*Route::get('/administration', function () {
    return view('administration');
});

Route::get('/page', function () {
    return view('page');
});
Route::get('/home', 'HomeController@index')->name('home');

//Route::get("/elev","ElevesController@create");*/

Auth::routes();


Route::resource('Eleve','ElevesController');
Route::get('/Eleve/edit/{id}','ElevesController@edit')->name('eleves_edit');
Route::get('/Eleve/cr','ElevesController@create')->name('eleves_create');
Route::patch("/Eleve/edit/{id}","ElevesController@update")->name('eleves_update');

