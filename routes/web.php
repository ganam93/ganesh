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

Route::get('/', 'HomeController@index');

Route::prefix('manage')->middleware('role:superadministrator')
	->group(function (){
		Route::get('/','ManageController@index');

	});

Route::resource('companies','CompanyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
