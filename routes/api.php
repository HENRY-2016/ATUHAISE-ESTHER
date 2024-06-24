<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('student/recording/post',[BaseApiController::class,'saveStudentPosts']);
Route::post('student/log/in/post',[BaseApiController::class,'studentLogIn']);
Route::get('student/week1/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek1Logs']);
Route::get('student/week2/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek2Logs']);
Route::get('student/week3/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek3Logs']);
Route::get('student/week4/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek4Logs']);
Route::get('student/week5/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek5Logs']);
Route::get('student/week6/logs/data/by/regNum/{regNum}',[BaseApiController::class,'studentWeek6Logs']);


