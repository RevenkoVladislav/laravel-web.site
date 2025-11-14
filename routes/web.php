<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MagazineController AS Magazine;

//Главная страница
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/about', function () {
        return view('about');
    });
});

Route::resource('posts', PostController::class);

Route::prefix('magazine')->name('magazine.')->group(function () {
    Route::get('/', [Magazine::class, 'index'])->name('index');
    Route::post('/', [Magazine::class, 'store'])->name('store');
    Route::get('/edit{productShop}', [Magazine::class, 'edit'])->name('edit');
    Route::patch('/{productShop}', [Magazine::class, 'update'])->name('update');
});

