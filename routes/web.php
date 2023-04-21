<?php

use App\Http\Controllers\Folder\GuestPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [GuestPageController::class, 'index'])->name('books.index');
Route::get('/books/create', [GuestPageController::class, 'create'])->name('books.create');
Route::get('/books/{book}', [GuestPageController::class, 'show'])->name('books.show');
Route::post('/books', [GuestPageController::class, 'store'])->name('books.store');
