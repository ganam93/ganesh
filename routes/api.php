<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/Company', 'API\CompaniesController');

Route::resource('/Branch', 'API\BranchesController');

Route::resource('/Sensor', 'API\SensorController');