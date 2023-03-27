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

Route::middleware('is_admin', 'auth')->group( function () {

//    Таблица с оружием
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');


        Route::get('/table/wearon', [\App\Http\Controllers\AdminWearonTableController::class, 'index'])->name('admin.database');
        Route::post('/database', [\App\Http\Controllers\AdminWearonTableController::class, 'store'])->name('admin.database.store');
        Route::get('/database/create', [\App\Http\Controllers\AdminWearonTableController::class, 'create'])->name('admin.database.create');
        Route::get('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'show'])->name('admin.database.show');
        Route::get('/database/{id}/edit', [\App\Http\Controllers\AdminWearonTableController::class, 'edit'])->name('admin.database.edit');
        Route::put('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'update'])->name('admin.database.update');
        Route::delete('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'destroy'])->name('admin.database.destroy');
        Route::put('/records/{id}/restore', [\App\Http\Controllers\AdminWearonTableController::class, 'restore'])->name('restore');
        Route::get('/database/deleted', [\App\Http\Controllers\AdminWearonTableController::class, 'deletedRecords'])->name('deleted');
        Route::delete('record/delete/{id}', [App\Http\Controllers\AdminWearonTableController::class, 'deletedestroy'])->name('deletedestroy');
    });
});


Route::get('/', function () {
    return view('main_page.welcome');
});

// Регистрация пользователя
Route::get('/register', [\App\Http\Controllers\UserController::class, 'getRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'postRegister']);

// Авторизация пользователя
Route::get('/login', [\App\Http\Controllers\UserController::class, 'getLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'postLogin']);

// Выход пользователя
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');


Route::get('/database', [\App\Http\Controllers\DataBaseController::class, 'index']);


Route::get('/installation', [\App\Http\Controllers\InstallationController::class, 'show']);
Route::get('/LPCalculator', function () {
   return view('LPcalc.calcLP');
});

Route::get('404', function () {
    return view('errors.404');
})->name('404');


