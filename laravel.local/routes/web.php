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
Route::get('/database', [\App\Http\Controllers\DataBaseController::class, 'index'])->name('database.index');
Route::get('/database/create', [\App\Http\Controllers\DataBaseController::class, 'create'])->name('database.create');
Route::post('/database', [\App\Http\Controllers\DataBaseController::class, 'store'])->name('database.store');
Route::get('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'show'])->name('database.show');
Route::get('/database/{id}/edit', [\App\Http\Controllers\DataBaseController::class, 'edit'])->name('database.edit');
Route::put('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'update'])->name('database.update');
Route::delete('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'destroy'])->name('database.destroy');


Route::get('/installation', [\App\Http\Controllers\InstallationController::class, 'show']);
Route::get('/LPCalculator', [\App\Http\Controllers\LPcalcController::class, 'show']);



