<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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

// Route::get('/', function () {
    Route::get('/', [ JobController::class, 'index'])->name('login');
    Route::get('/show/:id', [ JobController::class, 'show']);
    Route::post('/confirm', [ JobController::class, 'confirm']);
// });