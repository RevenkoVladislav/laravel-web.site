<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

//Главная страница
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/about', function () {
        return view('about');
    });
});

Route::resource('posts', PostController::class);

