<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/company', 'API\CompaniesController');

Route::resource('/Branch', 'API\BranchesController');

Route::resource('/visitors', 'API\VisitorsController');

Route::resource('/Contact', 'API\ContactsController');

Route::resource('/Sensor', 'API\SensorsController');

Route::resource('/Idcard', 'API\IdcardsController');
