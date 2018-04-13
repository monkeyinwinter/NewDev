<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('Accueil');

Route::get('/accueiltest', 'HomeController@accueiltest')->name('accueiltest');


Route::get('/accueil', 'HomeController@accueil')->name('arts');
Route::get('/profilPerso', 'HomeController@profilPerso')->name('profilPerso');
Route::get('/profilAutres', 'HomeController@profilAutres')->name('profilAutres');
Route::get('/mentionsLegales', 'HomeController@mentionsLegales')->name('mentionsLegales');
Route::get('/CGU', 'HomeController@CGU')->name('CGU');
Route::get('/resetPassword', 'HomeController@resetPassword')->name('resetPassword');