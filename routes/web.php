<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/accueil', 'HomeController@accueil')->name('arts');
Route::get('/profilPerso', 'HomeController@profilPerso')->name('profilPerso');
Route::get('/profilAutres', 'HomeController@profilAutres')->name('profilAutres');
Route::get('/mentionsLegales', 'HomeController@mentionsLegales')->name('mentionsLegales');
Route::get('/CGU', 'HomeController@CGU')->name('CGU');
Route::get('/resetPassword', 'HomeController@resetPassword')->name('resetPassword');
Route::get('/remitest', 'HomeController@remitest')->name('remitest');
Route::get('/remitest2', 'HomeController@remitest2')->name('remitest2');