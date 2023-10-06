<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainpageController;

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

Route::get('/', [App\Http\Controllers\MainpageController::class, 'index']);


Route::get('/downloads', [App\Http\Controllers\MainpageController::class, 'downloads']);

Route::get('guides', [App\Http\Controllers\MainpageController::class, 'guides']);

