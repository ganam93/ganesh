<?php


//Authentication
Auth::routes();

//Options on sidebar (Controlled by PagesController)
Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/visitors', 'PagesController@visitors');
Route::get('/idcards', 'PagesController@idcards');
Route::get('/sensors', 'PagesController@sensors');


// Following pages will be shown to superadmin only

Route::prefix('/')->middleware('role:superadministrator|administrator') 
/* If URL is "securelobby.me/" and role of logged in user is superadmin
   then following pages will be shown
*/
	->group(function (){
		Route::get('/users', 'PagesController@users');	//Sidebar -> Pages	
		Route::get('/users/add', 'SubPages\UsersController@add');	//Sidebar -> Pages

		/* Pages with '/companies' prefix
		   e.g. 'securelobby.me/companies/add'
		*/
		Route::prefix('/companies')->middleware('role:superadministrator') //for URL "securelobby.me",
			->group(function (){

				Route::get('/', 'PagesController@companies');  // "securelobby.me/comapnies" (Sidebar -> Comapnies)
					/* Following are subpages which will open from links in companies page 
					   when superadmin wants to add new company, He will click on add button and
					   page will redirect to "securelobby.me/comapnies/add"
					*/
					
				Route::get('/add', 'SubPages\CompaniesController@add'); //route to add new company page
				Route::post('/add', 'SubPages\CompaniesController@store'); //Post request to add company

				Route::get('/edit/{id}', 'SubPages\CompaniesController@edit'); //route to add new branch page
				Route::put('/edit/{id}', 'SubPages\CompaniesController@update'); //PUT request to add branch

				Route::get('/{id}/addbranch', 'SubPages\BranchesController@addbranch'); //route to add new branch page
				Route::post('/{id}/addbranch', 'SubPages\BranchesController@store'); //Post request to add branch

				Route::get('/{id}/addSensor', 'SubPages\SensorsController@addSensor'); //route to add new branch page
				Route::post('/{id}/addSensor', 'SubPages\SensorsController@store'); //Post request to add branch

				Route::get('/{id}/addIdcard', 'SubPages\IdCardsController@addIdcard'); //route to add new branch page
				Route::post('/{id}/addIdcard', 'SubPages\IdCardsController@store'); //Post request to add branch

				Route::get('/{id}', 'SubPages\CompaniesController@show'); //"securelobby.me/companies/1"

			});

	});




/*
Route::get('/superadmin/addCompany', 'PagesController@superadminaddCompany');
Route::get('/superadmin/addSensors', 'PagesController@superadminaddSensors');
Route::get('/superadmin/addIdCards', 'PagesController@superadminaddIdCards');
Route::get('/superadmin/addBranch', 'PagesController@superadminaddBranch');
*/