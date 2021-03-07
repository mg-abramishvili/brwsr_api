<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkAdminController;

// AUTH
Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/', [LinkAdminController::class, 'index'])->name('home')->middleware('auth');
Route::get('/new-link', 'App\Http\Controllers\LinkAdminController@create')->middleware('auth');
Route::post('/links', 'App\Http\Controllers\LinkAdminController@store');
Route::get('links/delete/{id}','App\Http\Controllers\LinkAdminController@delete')->middleware('auth');