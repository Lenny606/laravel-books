<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Admin\AuthorController;

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\BookdetailController;
use App\Http\Controllers\BookshopController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index/index',[AuthorController::class, 'index']);
})->name('homepage');

//BOOKS

Route::get('/about-us', [AboutusController::class, 'aboutUs'])->name('about-us');
Route::get('/book/{book_id}', [BookdetailController::class, 'show'])->name('detail');
Route::post('/book/{book_id}/review', [BookdetailController::class, 'store']);

// BOOKSHOP
Route::get('/bookshop/{bookshop_id}', [BookshopController::class, 'show'])->name('bookshop');

Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('create');
Route::post('/admin/authors/save', [AuthorController::class, 'store'])->name('save');

//ADMIN
Route::get('/admin/books',[BookController::class, 'index']);
Route::get('/admin/books/create',[BookController::class, 'create'])->name('create-book');
Route::post('/admin/books/save',[BookController::class, 'store'])->name('save-book');

if(\Gate::allows('admin')) {
    // do some admin stuff
    return "iser is admin";
}