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
Route::get('/sidebar', 'HomeController@index');

Route::prefix('/')->middleware('role:superadministrator|administrator')
	->group(function (){
		Route::get('/users', 'PagesController@users');			
		Route::prefix('/companies')->middleware('role:superadministrator')
			->group(function (){
				Route::get('/addCompany', 'HomeController@index');
			});

	});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companies', 'PagesController@companies');
