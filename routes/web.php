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

Route::get('/produk/detail/{slug}', function ($slug) {
    $produkList = [
        'baggy-jeans' => [
            'nama' => 'Baggy Jeans',
            'harga' => 628000,
            'gambar' => 'baggy-jeans.jpg',
            'deskripsi' => 'Celana jeans model longgar cocok untuk gaya santai.',
        ],
        'cardigan-knitwear' => [
            'nama' => 'Cardigan Knitwear',
            'harga' => 200000,
            'gambar' => 'cardigan.jpg',
            'deskripsi' => 'Cardigan rajut hangat dan stylish untuk musim hujan.',
        ],
        'hat-ny' => [
            'nama' => 'Hat NY',
            'harga' => 125000,
            'gambar' => 'hat-navy.jpg',
            'deskripsi' => 'Topi baseball bergaya klasik dari New York.',
        ],
        'kaos-supreme' => [
            'nama' => 'Kaos Supreme',
            'harga' => 185000,
            'gambar' => 'kaos.jpg',
            'deskripsi' => 'Kaos Supreme original, kualitas premium.',
        ],
    ];

    if (!array_key_exists($slug, $produkList)) {
        abort(404);
    }

    return view('produk.detail', ['produk' => $produkList[$slug]]);
});

Route::get('/keranjang', function () {
    return view('produk.keranjang');
})->name('keranjang');

Route::get('/bayar', function () {
    return view('produk.bayar');
})->name('bayar');

Route::get('/struk', function () {
    return view('produk.struk');
})->name('struk');
