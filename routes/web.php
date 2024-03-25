<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController as ProjectController;


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
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth','verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('layouts.dashboard'); });

    Route::get('/settings', [ProjectController::class, '']);
    Route::get('/profile', [ProjectController::class, '']);
});


