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

//->ROUTE ERROR
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

Route::group(['prefix' => 'course_instructor'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\CourseInstructorController');
      Route::get('filter', 'Cecy\CourseInstructorController@filter');
      Route::put("{id}", "Cecy\CourseInstructorController@update");
      Route::delete('{id}', "Cecy\CourseInstructorController@destroy");
   //});
});

Route::group(['prefix' => 'course_requirement'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\CourseRequirementController');
      Route::get('filter', 'Cecy\CourseRequirementController@filter');
      Route::put("{id}", "Cecy\CourseRequirementController@update");
      Route::delete('{id}', "Cecy\CourseRequirementController@destroy");
   //});
});

//->ROUTE ERROR
Route::group(['prefix' => 'course_content'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\CoursesContentController');
      Route::get('filter', 'Cecy\CoursesContentController@filter');
      Route::put("{id}", "Cecy\CoursesContentController@update");
      Route::delete('{id}', "Cecy\CoursesContentController@destroy");
   //});
});

Route::group(['prefix' => 'department_data'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\DepartmentDataController');
      Route::get('filter', 'Cecy\DepartmentDataController@filter');
      Route::put("{id}", "Cecy\DepartmentDataController@update");
      Route::delete('{id}', "Cecy\DepartmentDataController@destroy");
   //});
});

Route::group(['prefix' => 'detail_registration'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\DetailRegistrationController');
      Route::get('filter', 'Cecy\DetailRegistrationController@filter');
      Route::put("{id}", "Cecy\DetailRegistrationController@update");
      Route::delete('{id}', "Cecy\DetailRegistrationController@destroy");
   //});
});

Route::group(['prefix' => 'profile_instructor_course'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\ProfileInstructorCourseController');
      Route::get('filter', 'Cecy\ProfileInstructorCourseController@filter');
      Route::put("{id}", "Cecy\ProfileInstructorCourseController@update");
      Route::delete('{id}', "Cecy\ProfileInstructorCourseController@destroy");
   //});
});

Route::group(['prefix' => 'proposal_courses'], function () {
   //Route::group(['middleware' => 'auth:api'], function () {
      Route::apiResource('', 'Cecy\ProposalCoursesController');
      Route::get('filter', 'Cecy\ProposalCoursesController@filter');
      Route::put("{id}", "Cecy\ProposalCoursesController@update");
      Route::delete('{id}', "Cecy\ProposalCoursesController@destroy");
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