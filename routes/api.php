<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/Company', 'API\CompaniesController');

Route::resource('/branch', 'API\BranchesController');

Route::resource('/contact', 'API\ContactsController');

Route::resource('/sensor', 'API\SensorsController');
