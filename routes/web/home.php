<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('admin.admins.layouts.master');
});

Route::get('/registers/create', [RegisteredUserController::class, 'create'])->name('registers.index');
Route::post('/registers', [RegisteredUserController::class, 'store'])->name('registers.store');
Route::get('/logins/create', [AuthenticatedSessionController::class, 'create'])->name('login.index');
Route::post('/logins', [AuthenticatedSessionController::class, 'store'])->name('logins.store');