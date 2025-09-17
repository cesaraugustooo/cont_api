<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User368Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/users',[User368Controller::class,'store']);

Route::middleware(['auth:sanctum','nutri'])->group(function(){
    Route::apiResource('users',User368Controller::class)->except('store');
});

Route::post('/login',[AuthController::class,'login']);