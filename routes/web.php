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
Route::get('/superadmin/companies', 'PagesController@superadmincompanies');
Route::get('/superadmin/addCompany', 'PagesController@superadminaddCompany');
Route::get('/superadmin/dashboard', 'PagesController@superadmindashboard');
Route::get('/superadmin/idCards', 'PagesController@superadminidCards');
Route::get('/superadmin/sensors', 'PagesController@superadminsensors');
Route::get('/superadmin/users', 'PagesController@superadminusers');
Route::get('/superadmin/visitors', 'PagesController@superadminvisitors');
Route::get('/superadmin/addSensors', 'PagesController@superadminaddSensors');
Route::get('/superadmin/addIdCards', 'PagesController@superadminaddIdCards');
Route::get('/superadmin/addBranch', 'PagesController@superadminaddBranch');