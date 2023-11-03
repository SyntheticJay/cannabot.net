<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;

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
    return redirect()->route('landing.index');
});

Route::group([
    'prefix' => 'landing',
    'as'     => 'landing.'
], function () {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('support', [LandingController::class, 'support'])->name('support');
    Route::get('invite', [LandingController::class, 'invite'])->name('invite');
});

Route::group([
    'prefix' => 'auth',
    'as'     => 'auth.'
], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('callback', [LoginController::class, 'callback'])->name('callback');
});

Route::group([
    'middleware' => 'auth',
    'prefix'     => 'dashboard',
    'as'         => 'dashboard.'
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
});
