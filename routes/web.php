<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/show', [UserController::class, 'show']);

Route::prefix('admin')->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return "به داشبورد مدیریت خوش آمدید. ";
        })->name('dashboard');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

        Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
        Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.destroy');

        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    });

Route::fallback(function () {
    return "صفحه مورد نظر یافت نشد.";
});
