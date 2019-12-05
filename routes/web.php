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

Route::get('/page', function () {
  return view('page');
});
//Route::get('/', function () {
   // return view('home');
//})
Route::get('/home', 'HomeController@index');

//Route::get("/elev","ElevesController@create");

//Auth::routes();


Route::resource('Eleve','ElevesController');
Route::get('/Eleve/edit/{id}','ElevesController@edit')->name('eleves_edit');
Route::get('/Eleve/cr','ElevesController@create')->name('eleves.create');
Route::patch("/Eleve/edit/{id}","ElevesController@update")->name('eleves_update');


Route::resource('Inscription','InscriptionsController');
Route::get('/Inscription/edit/{id}','InscriptionsController@edit')->name('inscriptions_edit');
Route::get('/Inscription/cr','InscriptionsController@create')->name('inscriptions_create');
Route::patch("/Inscription/edit/{id}","InscriptionsController@update")->name('inscriptions_update');

