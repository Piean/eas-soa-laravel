<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uuid', [
    'as' => 'profile', 'uses' => 'User\UserController@getUUID'
]);

Route::group(['prefix' => 'user', 'namespace' => 'User'], function()
{
    Route::get('/login','UserController@login');
    Route::get('/change_pass','UserController@changePass');
    Route::get('/query_info','UserController@queryUserInfoByUserId');
    Route::get('/change_info','UserController@changeUserInfoByUserId');
});

Route::group(['prefix' => 'course', 'namespace' => 'Course'], function()
{
    Route::get('/schedule','CourseController@getSchedule');
});

Route::group(['prefix' => 'score', 'namespace' => 'Score'], function()
{
    Route::get('/queryScore','ScoreController@queryScoreInfoUserId');
});

Route::group(['prefix' => 'assess', 'namespace' => 'Assess'], function()
{
    Route::get('/assess','AssessController@setAssessResult');
});