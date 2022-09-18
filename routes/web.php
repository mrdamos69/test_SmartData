<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
    return view('home');
})->name('home');

Route::get('/admin_add', function () {
    return view('admin_add');
})->name('admin_add');

Route::post('/admin_add/push', [BookController::class, 'store'])->name('push_book');

Route::get('/admin_delete', function () {
    return view('admin_delete');
})->name('admin_delete');

Route::get('/admin_remove', function () {
    return view('admin_remove');
})->name('admin_remove');

Route::get('/books', [BookController::class, 'create'])->name("books");

Route::get('/authors', [AuthorController::class, 'create'])->name('authors');

