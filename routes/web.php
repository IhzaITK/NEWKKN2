<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/', [UMKMController::class, 'index'])->name('welcome');

Route::get('/dashboard', [UMKMController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/umkm/create', [UMKMController::class, 'create'])->name('umkm.create');
    Route::post('/admin/umkm', [UMKMController::class, 'store'])->name('umkm.store');
    Route::get('/admin/umkm/{id}/edit', [UMKMController::class, 'edit'])->name('umkm.edit');
    Route::put('/admin/umkm/{id}', [UMKMController::class, 'update'])->name('umkm.update');
    Route::delete('/admin/umkm/{id}', [UMKMController::class, 'destroy'])->name('umkm.destroy');
    Route::resource('users', UserController::class)->except(['show']);
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::resource('user', UserController::class);
});

Route::resource('umkm', controller: UmkmController::class);
Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.detail');
Route::get('/info', [UmkmController::class, 'info'])->name('info');


require __DIR__.'/auth.php';    
