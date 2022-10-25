<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSingUpController;
use App\Http\Controllers\UserLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::prefix('singUp')->group(function () {
    Route::get('/', [UserSingUpController::class, 'index'])->name('singUp.index');
    Route::post('/store', [UserSingUpController::class, 'store'])->name('singUp.store');
});

Route::prefix('login')->group(function () {
    Route::get('/', [UserLoginController::class, 'index'])->name('login.index');
    Route::post('/store', [UserLoginController::class, 'store'])->name('login.store');
});