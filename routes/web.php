<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseSchool;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MagazineController as Magazine;

//Главная страница
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/about', function () {
        return view('about');
    });
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('messages', MessageController::class);
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


Route::get('interesting', [PriceController::class, 'InterestingPrice'])->name('interesting');
Route::get('/price', [PriceController::class, 'GroupPrice'])->name('group.price');
Route::get('/price/{course}', [PriceController::class, 'PriceForCourse'])->name('price');
Route::get('/price/{school}/{course}', [PriceController::class, 'SchoolCourse'])->name('interesting.price');

Route::middleware('guest')->group(function () {
    Route::get('/auth/login', [SessionController::class, 'create'])->name('auth.login');
    Route::post('/auth/login', [SessionController::class, 'store']);
    Route::get('/auth/logout', [SessionController::class, 'destroy'])->name('auth.logout');
});
