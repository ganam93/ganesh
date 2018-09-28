<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies','CompanyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
