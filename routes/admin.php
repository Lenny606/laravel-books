<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;


Route::get('/admin/authors', [AuthorController::class, 'index']);

// Route::get('/admin', [AdminController::class, 'index'])->middleware('can:admin')->name("admin.home");

// creates a group routes for easer acces and readabilitu
Route::group(['middleware' => 'can:admin'], function () {
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/edit', [AdminController::class, 'edit']);
Route::get('/admin/show', [AdminController::class, 'show']);
Route::get('/admin/store', [AdminController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/users', [UserController::class, 'index'])->name('admin.users');
});