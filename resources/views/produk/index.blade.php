@extends('layouts.app')

@section('content')
<h4 class="fw-bold mb-3">New Product</h4>

<div class="row row-cols-2 row-cols-md-3 g-3">
    @php
        $produkList = [
            ['nama' => 'Baggy Jeans', 'harga' => 628000, 'gambar' => 'baggy-jeans.jpg'],
            ['nama' => 'Cardigan Knitwear', 'harga' => 200000, 'gambar' => 'cardigan.jpg'],
            ['nama' => 'Hat Navy', 'harga' => 125000, 'gambar' => 'hat-navy.jpg'],
        ];
    @endphp

    @foreach ($produkList as $produk)
    <div class="col">
        <div class="product-card p-2 h-100">
            <div class="product-image-wrapper mb-2">
                <img src="{{ asset('storage/produk/' . $produk['gambar']) }}" alt="{{ $produk['nama'] }}" class="product-image">
            </div>
            <div class="text-center">
                <p class="product-title mb-1">{{ $produk['nama'] }}</p>
                <div class="product-price">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
