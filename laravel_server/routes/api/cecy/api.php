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

Route::group(['prefix' => 'agreement_company'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\AgreementCompanyController');
      Route::get('filter', 'Cecy\AgreementCompanyController@filter');
      Route::put("{id}", "Cecy\AgreementCompanyController@update");
      Route::delete('{id}', "Cecy\AgreementCompanyController@destroy");
   //});
});

Route::group(['prefix' => 'agreements'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\AgreementsController');
      Route::get('filter', 'Cecy\AgreementsController@filter');
      Route::put("{id}", "Cecy\AgreementsController@update");
      Route::delete('{id}', "Cecy\AgreementsController@destroy");
   //});
});

Route::group(['prefix' => 'schedule'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\ScheduleController');
      Route::get('filter', 'Cecy\ScheduleController@filter');
      Route::put("{id}", "Cecy\ScheduleController@update");
      Route::delete('{id}', "Cecy\ScheduleController@destroy");
   //});
});