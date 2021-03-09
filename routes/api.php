<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomepageController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('links', LinkController::class);
Route::apiResource('domains', DomainController::class);
Route::apiResource('homepage', HomepageController::class);