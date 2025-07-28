@extends('layouts.app')

@section('content')
<!-- SEARCH & ICONS -->
<div class="d-flex justify-content-between align-items-center mb-3">
    <input type="text" class="form-control me-2" placeholder="items and brands" style="max-width: 75%;">
    <div class="d-flex gap-2">
        <button class="btn btn-light"><i class="bi bi-camera"></i></button>
        <button class="btn btn-light"><i class="bi bi-cart"></i></button>
        <button class="btn btn-light"><i class="bi bi-bell"></i></button>
    </div>
</div>

<!-- BANNER CAROUSEL -->
<div id="bannerCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/600x200?text=Aurora+Agency" class="d-block w-100" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/600x200?text=Vintage+Fashion" class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/600x200?text=Preloved+Deals" class="d-block w-100" alt="Banner 3">
        </div>
    </div>
</div>

<!-- FILTER -->
<div class="d-flex justify-content-between align-items-center mb-2">
    <h5 class="fw-bold">Filters ></h5>
</div>

<!-- PRODUK HORIZONTAL SCROLL -->
<h5 class="fw-bold mb-2">New Product</h5>
<div class="d-flex overflow-auto gap-3 pb-2" style="scroll-snap-type: x mandatory;">
    @php
        $produkList = [
            ['nama' => 'Baggy Jeans', 'harga' => 628000, 'gambar' => 'baggy-jeans.jpg'],
            ['nama' => 'Cardigan Knitwear', 'harga' => 200000, 'gambar' => 'cardigan.jpg'],
            ['nama' => 'Hat NY', 'harga' => 125000, 'gambar' => 'hat-navy.jpg'],
            ['nama' => 'Kaos Supreme', 'harga' => 185000, 'gambar' => 'kaos.jpg'],
        ];
    @endphp

    @foreach ($produkList as $produk)
    <div class="product-card text-center" style="flex: 0 0 150px; scroll-snap-align: start;">
        <div class="product-image-wrapper mb-2">
            <img src="{{ asset('storage/produk/' . $produk['gambar']) }}" alt="{{ $produk['nama'] }}" class="product-image">
        </div>
        <p class="mb-1 fw-semibold">{{ $produk['nama'] }}</p>
        <div class="product-price">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</div>
    </div>
    @endforeach
</div>
@endsection
