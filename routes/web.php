<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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

//Route::post('/admin_add/push', function () {
//    return view('admin_push_ok');
//})->name('push_book');

Route::post('/admin_add/push', function () {
    dd(Request::all());
})->name('push_book');

Route::get('/admin_delete', function () {
    return view('admin_delete');
})->name('admin_delete');

Route::get('/admin_remove', function () {
    return view('admin_remove');
})->name('admin_remove');

Route::get('/books', function () {
    return view('list_of_books');
})->name("books");

Route::get('/authors', function () {
    return view('list_of_authors');
})->name('authors');

