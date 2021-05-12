<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [SiteController::class, 'index']);

Route::get('/home', [SiteController::class, 'home'])->name('home')->middleware('auth');



// Route::group(
//     [
//         'middleware' => ['auth', 'admin'],
//         'name' => 'admin.',
//         'prefix' => 'admin'
//     ],
//     function () {
//         Route::get('/', [AdminController::class, 'index'])->name('index');
//         Route::resource('users', [UserController::class]);
//     }
// );

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('users', UserController::class);
});
