<?php

use App\Http\Controllers\CourseSchool;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SchoolController;
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
    Route::delete('/{productShop}', [Magazine::class, 'destroy'])->name('destroy');
});

Route::resource('schools', SchoolController::class);
Route::put('/schools/{school}/attach', [SchoolController::class, 'attachItems'])->name('school.attach');
Route::get('/schools/{school}/attach', [SchoolController::class, 'attachForm'])->name('school.form');
Route::delete('/{course}', [SchoolController::class, 'destroyCourse'])->name('course.destroy');


Route::get('/price/{course}', [PriceController::class, 'PriceForCourse'])->name('price');
