<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// classes
Route::ApiResource('/classes','App\Http\Controllers\Api\StudentClassController');

//subjects
Route::ApiResource('/subjects','App\Http\Controllers\Api\SubjectController');


//Students

Route::get('/students','App\Http\Controllers\Api\StudentController@index');
Route::post('/students/store','App\Http\Controllers\Api\StudentController@store');
Route::get('/students/edit/{id}','App\Http\Controllers\Api\StudentController@edit');
Route::post('/students/update/{id}','App\Http\Controllers\Api\StudentController@edit');


Route::group([

    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
