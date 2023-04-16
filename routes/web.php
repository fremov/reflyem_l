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

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('/table/wearon', [\App\Http\Controllers\AdminWearonTableController::class, 'index'])->name('admin.database');
        Route::prefix('wearon')->group(function () {
            Route::post('/database', [\App\Http\Controllers\AdminWearonTableController::class, 'store'])->name('admin.database.store');
            Route::get('/database/create', [\App\Http\Controllers\AdminWearonTableController::class, 'create'])->name('admin.database.create');
            Route::get('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'show'])->name('admin.database.show');
            Route::get('/database/{id}/edit', [\App\Http\Controllers\AdminWearonTableController::class, 'edit'])->name('admin.database.edit');
            Route::put('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'update'])->name('admin.database.update');
            Route::delete('/database/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'destroy'])->name('admin.database.destroy');
            Route::put('/records/{id}/restore', [\App\Http\Controllers\AdminWearonTableController::class, 'restore'])->name('restore');
            Route::get('/database/deleted', [\App\Http\Controllers\AdminWearonTableController::class, 'deletedRecords'])->name('deleted');
            Route::delete('record/delete/{id}', [\App\Http\Controllers\AdminWearonTableController::class, 'deletedestroy'])->name('deletedestroy');
        });

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::get('/table/armor', [\App\Http\Controllers\AdminArmorTableController::class, 'index'])->name('admin.armor');
        Route::prefix('armor')->group(function () {
            Route::post('/database', [\App\Http\Controllers\AdminArmorTableController::class, 'store'])->name('admin.armor.store');
            Route::get('/database/create', [\App\Http\Controllers\AdminArmorTableController::class, 'create'])->name('admin.armor.create');
            Route::get('/database/{id}', [\App\Http\Controllers\AdminArmorTableController::class, 'show'])->name('admin.armor.show');
            Route::get('/database/{id}/edit', [\App\Http\Controllers\AdminArmorTableController::class, 'edit'])->name('admin.armor.edit');
            Route::put('/database/{id}', [\App\Http\Controllers\AdminArmorTableController::class, 'update'])->name('admin.armor.update');
            Route::delete('/database/{id}', [\App\Http\Controllers\AdminArmorTableController::class, 'destroy'])->name('admin.armor.destroy');
            Route::put('/records/{id}/restore', [\App\Http\Controllers\AdminArmorTableController::class, 'restore'])->name('restore_armor');
            Route::get('/database/deleted', [\App\Http\Controllers\AdminArmorTableController::class, 'deletedRecords'])->name('deleted_armor');
            Route::delete('record/delete/{id}', [\App\Http\Controllers\AdminArmorTableController::class, 'deletedestroy'])->name('deletedestroy_armor');
        });

        Route::get('/table/user', [\App\Http\Controllers\AdminUserTableController::class, 'index'])->name('admin.user');
        Route::prefix('user')->group(function () {
            Route::post('/database', [\App\Http\Controllers\AdminUserTableController::class, 'store'])->name('admin.user.store');
            Route::get('/database/create', [\App\Http\Controllers\AdminUserTableController::class, 'create'])->name('admin.user.create');
            Route::get('/database/{id}', [\App\Http\Controllers\AdminUserTableController::class, 'show'])->name('admin.user.show');
            Route::get('/database/{id}/edit', [\App\Http\Controllers\AdminUserTableController::class, 'edit'])->name('admin.user.edit');
            Route::put('/database/{id}', [\App\Http\Controllers\AdminUserTableController::class, 'update'])->name('admin.user.update');
            Route::delete('/database/{id}', [\App\Http\Controllers\AdminUserTableController::class, 'destroy'])->name('admin.user.destroy');
            Route::put('/records/{id}/restore', [\App\Http\Controllers\AdminUserTableController::class, 'restore'])->name('restore_user');
            Route::get('/database/deleted', [\App\Http\Controllers\AdminUserTableController::class, 'deletedRecords'])->name('deleted_user');
            Route::delete('record/delete/{id}', [\App\Http\Controllers\AdminUserTableController::class, 'deletedestroy'])->name('deletedestroy_user');
        });
    });
});


Route::get('/', [\App\Http\Controllers\AppController::class, 'index'])->name('main_page');

// Регистрация пользователя
Route::get('/register', [\App\Http\Controllers\UserController::class, 'getRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'postRegister']);

// Авторизация пользователя
Route::get('/login', [\App\Http\Controllers\UserController::class, 'getLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'postLogin']);

// Выход пользователя
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');


Route::get('/installation', [\App\Http\Controllers\InstallationController::class, 'show']);


Route::middleware('auth')->group(function () {
    Route::get('/database', [\App\Http\Controllers\DataBaseController::class, 'index']);
    Route::get('/last_mods', [\App\Http\Controllers\ParseModsController::class, 'index'])->name('parse');
    Route::get('/chagelog', [App\Http\Controllers\ChangelogController::class, 'index'])->name('chagelog');
    Route::get('/LPCalculator', function () {
        return view('LPcalc.calcLP');
    });

});

Route::get('/test', [\App\Http\Controllers\DataBaseController::class, 'index']);

Route::get('404', function () {
    return view('errors.404');
})->name('404');


