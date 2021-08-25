<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkAdminController;
use App\Http\Controllers\DomainAdminController;
use App\Http\Controllers\HomepageAdminController;

// AUTH
Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/', [LinkAdminController::class, 'index'])->name('home');
Route::get('/new-link', 'App\Http\Controllers\LinkAdminController@create');
Route::post('/links', 'App\Http\Controllers\LinkAdminController@store');
Route::get('links/delete/{id}','App\Http\Controllers\LinkAdminController@delete');

Route::get('/new-domain', 'App\Http\Controllers\DomainAdminController@create');
Route::post('/domains', 'App\Http\Controllers\DomainAdminController@store');
Route::get('domains/delete/{id}','App\Http\Controllers\DomainAdminController@delete');

Route::put('/homepage/{id}', 'App\Http\Controllers\HomepageAdminController@update');