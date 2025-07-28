<?php

use Illuminate\Support\Facades\Route;

Route::view('/about', 'pages.about')->name('about');
Route::view('/panduan', 'pages.panduan')->name('panduan');
Route::view('/terms', 'pages.terms')->name('terms');

Route::get('/produk', function () {
    return view('produk.index');
})->name('produk.index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produk', function () {
    return view('produk.index');
})->name('produk.index');
