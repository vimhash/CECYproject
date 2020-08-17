<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'schedules'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
       Route::get('', 'Cecy\ScheduleController@index');
   //});
});

Route::group(['prefix' => 'catalogues'], function () {
   // Route::group(['middleware' => 'auth:api'], function () {
        Route::get('', 'Cecy\CatalogueController@index');
        Route::get('filter', 'Cecy\CatalogueController@filter');
        Route::post("", "Cecy\CatalogueController@store");
   // });
});
