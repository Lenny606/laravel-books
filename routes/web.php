<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Admin\AuthorController;

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

Route::get('/about-us', [AboutusController::class, 'aboutUs'])->name('about-us');

Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('create');
Route::post('/admin/authors/save', [AuthorController::class, 'store'])->name('save');
