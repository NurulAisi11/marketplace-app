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

<!-- Banner Carousel -->
<div id="brandCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100 rounded" alt="Banner 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100 rounded" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100 rounded" alt="Banner 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
