<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});

//    Route::get( '/', [IndexController::class]);

Route::get('/test/{id}', [\App\Http\Controllers\TestController::class, "show"])
    ->name("test")
    ->where("id", "[0-9]+")
    ->middleware(\App\Http\Middleware\NeedTestHeader::class);
