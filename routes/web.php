<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $dataKeranjang = [
        [
            'nama' => 'Cardigan Knitwear',
            'jumlah' => 1,
            'harga' => 258000
        ],
    ];
    return view('produk.keranjang', compact('dataKeranjang'));
})->name('keranjang');


Route::get('/bayar', function () {
    return view('produk.bayar');
})->name('bayar');

Route::get('/struk', function () {
    return view('produk.struk');
})->name('struk');

Route::get('/instruksi', function () {
    return view('produk.instruksi');
})->name('instruksi');



Route::get('/cart', function () {
    $cart = session()->get('cart', []);
    return view('pages.cart', compact('cart'));
})->name('cart');

Route::post('/keranjang/add', function (Request $request) {
    $cart = session()->get('cart', []);

    $cart[] = [
        'nama' => $request->nama,
        'harga' => $request->harga,
        'gambar' => $request->gambar,
    ];

    session()->put('cart', $cart);

    return redirect()->route('cart');
})->name('cart.add');
