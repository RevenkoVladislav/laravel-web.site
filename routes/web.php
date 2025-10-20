<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;

//Главная страница
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/services', 'services');
});

Route::controller(NewsController::class)->group(function () {
   Route::get('/news', 'news');
   Route::get('/news/{id}', 'post');
});
