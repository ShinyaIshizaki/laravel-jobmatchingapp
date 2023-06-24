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

Route::get('/', [ JobController::class, 'index'])->name('home');
Route::get('jobs/show/', [ JobController::class, 'show']);
Route::post('/confirm', [ JobController::class, 'confirm']);
