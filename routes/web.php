<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/show', [UserController::class, 'show']);

Route::prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');

        Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show')
        ->where('id','[0-9]+');

        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');
    });

Route::fallback(function () {
    return "صفحه مورد نظر یافت نشد.";
});
