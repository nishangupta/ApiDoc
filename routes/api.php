<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\LoginController;

Route::post('/login',[LoginController::class,'index']);
Route::post('/register',[LoginController::class,'store']);

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('/user',[UserController::class,'index']);
    
    Route::get('/logout',[LoginController::class,'logout']);
});