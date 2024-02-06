<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('event', EventController::class);
Route::apiResource('organizer', OrganizerController::class);
Route::apiResource('participant', ParticipantController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('userdetail', UserDetailController::class);