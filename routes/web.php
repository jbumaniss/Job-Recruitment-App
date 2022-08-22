<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index'])->name('index');

Route::get('/jobs/create', [JobController::class, 'create'])->name('create')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->name('store')->middleware('auth');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('/jobs/manage', [JobController::class, 'manage'])->name('manage')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('show');

Route::get('/register', [UserController::class, 'create'])->name('create')->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->name('userStore')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate')->middleware('guest');
