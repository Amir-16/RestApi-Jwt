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