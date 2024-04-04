<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::resource('stories', \App\Http\Controllers\StoryController::class);

    Route::get('sliders', [\App\Http\Controllers\SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [\App\Http\Controllers\SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders/store', [\App\Http\Controllers\SliderController::class, 'store'])->name('sliders.store');
    Route::delete('sliders/{slider}', [\App\Http\Controllers\SliderController::class, 'destroy'])->name('sliders.destroy');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
