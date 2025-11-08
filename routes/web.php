<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

//Главная страница
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', function () {
        return view('about', [
            'some_variable' => mt_rand(1, 10)
        ]);
    });
    Route::get('/services', 'services');
});

Route::resource('messages', MessagesController::class);

