<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('main_page.welcome');
});
Route::get('/database', [\App\Http\Controllers\DataBaseController::class, 'show_data']);
Route::get('/installation', [\App\Http\Controllers\InstallationController::class, 'show']);
Route::get('/LPCalculator', [\App\Http\Controllers\LPcalcController::class, 'show']);
//Route::post('/form', [PostController::class, 'form']);
//Route::get('/form', [PostController::class, 'form']);


