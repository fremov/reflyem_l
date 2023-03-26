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
    Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/tables', [\App\Http\Controllers\AdminWearonTableController::class, 'index'])->name('admin_tables');
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



Route::post('/database', [\App\Http\Controllers\DataBaseController::class, 'store'])->name('database.store');
Route::get('/database', [\App\Http\Controllers\DataBaseController::class, 'index'])->name('database.index');
Route::get('/database/create', [\App\Http\Controllers\DataBaseController::class, 'create'])->name('database.create');
Route::get('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'show'])->name('database.show');
Route::get('/database/{id}/edit', [\App\Http\Controllers\DataBaseController::class, 'edit'])->name('database.edit');
Route::put('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'update'])->name('database.update');
Route::delete('/database/{id}', [\App\Http\Controllers\DataBaseController::class, 'destroy'])->name('database.destroy');


Route::get('/installation', [\App\Http\Controllers\InstallationController::class, 'show']);

Route::get('404', function () {
    return view('errors.404');
})->name('404');


