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
Route::get('/eleve', function () {
  return view('eleve');
});
Route::post('/eleve', function () {
  return view('eleve');
});
Route::get('/inscription', function () {
  return view('inscription');
});

//Route::get('/home', function () {
//  return view('home');
//});
//Route::get('/', function () {
   // return view('home');
//})
//Route::get('/home', 'HomeController@index');

//Route::get("/elev","ElevesController@create");

//Auth::routes();


Route::resource('/Eleve','ElevesController');
Route::get('/eleve/edit/{id}','ElevesController@edit')->name('eleves_edit');
Route::get('/eleve/cr','ElevesController@create');
Route::patch("/eleve/edit/{id}","ElevesController@update")->name('eleves_update');


Route::resource('Inscription','InscriptionsController');
Route::get('/Inscription/edit/{id}','InscriptionsController@edit')->name('inscriptions_edit');
Route::get('/Inscription/cr','InscriptionsController@create')->name('inscriptions_create');
Route::patch("/Inscription/edit/{id}","InscriptionsController@update")->name('inscriptions_update');

