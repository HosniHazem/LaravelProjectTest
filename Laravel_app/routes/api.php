<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\WeekDaysController;
use App\Http\Controllers\WeekDayRawController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//weekdays routes
Route::get('Weekday/{id}/show', [WeekdaysController::class,'show']);
    Route::get('Weekday', [WeekdaysController::class,'index']);
    Route::delete('Weekday/{id}/delete', [WeekdaysController::class,'destroy']);
    Route::put('Weekday/{id}/update', [WeekdaysController::class,'update']);
    Route::post('Weekday/create',[WeekdaysController::class,'store']);
//weekdaysraw routes
    Route::get('WeekDayRow/{id}/show', [WeekDayRowsController::class,'show']);
    Route::get('WeekDayRow', [WeekDayRowsController::class,'index']);
    Route::delete('WeekDayRow/{id}/delete', [WeekDayRowsController::class,'destroy']);
    Route::put('WeekDayRow/{id}/update', [WeekDayRowsController::class,'update']);
    Route::post('WeekDayRow/create',[WeekDayRowsController::class,'store']);
//options routes
    Route::get('Option/{id}/show', [OptionsController::class,'show']);
    Route::get('Option', [OptionsController::class,'index']);
    Route::delete('Option/{id}/delete', [OptionsController::class,'destroy']);
    Route::put('Option/{id}/update', [OptionsController::class,'update']);
    Route::post('Option/create',[OptionsController::class,'store']);