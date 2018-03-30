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
Route::get('/accueil', 'HomeController@accueil')->name('arts');
Route::get('/profilPerso', 'HomeController@profilPerso')->name('profilPerso');
Route::get('/profilAutres', 'HomeController@profilAutres')->name('profilAutres');
Route::get('/mentionsLegales', 'HomeController@mentionsLegales')->name('mentionsLegales');
Route::get('/CGU', 'HomeController@CGU')->name('CGU');
Route::get('/resetPassword', 'HomeController@resetPassword')->name('resetPassword');