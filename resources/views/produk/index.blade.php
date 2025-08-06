@extends('layouts.app')

@php
    use Illuminate\Support\Str;
@endphp


@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold text-primary me-3" href="{{ url('/') }}">
            Nazt Preloved
        </a>

        <!-- Search Bar -->
        <form class="d-flex flex-grow-1 me-3" role="search">
            <input class="form-control rounded-pill px-3" type="search" placeholder="Items and brands" aria-label="Search">
        </form>

        <!-- Toggle Button (Mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav align-items-lg-center ms-auto gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}" href="{{ route('produk.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('panduan') ? 'active' : '' }}" href="{{ route('panduan') }}">Guide</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary fw-semibold rounded-pill px-3 py-1" href="{{ route('struk') }}">
                        Checkout
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center gap-2 ms-lg-3">
                    <a href="#"><i class="bi bi-camera fs-5"></i></a>
                    <a href="#"><i class="bi bi-cart fs-5"></i></a>
                    <a href="#"><i class="bi bi-bell fs-5"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Banner Carousel -->
<div id="brandCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
           <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100 rounded banner-image" alt="Banner 1">

        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100 rounded banner-image" alt="Banner 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100 rounded banner-image" alt="Banner 3">
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

<!-- FILTER HORIZONTAL SCROLL -->
<h5 class="fw-bold mb-2">Filters ></h5>
<div class="d-flex overflow-auto gap-3 pb-2 mb-3" style="scroll-snap-type: x mandatory;">
    {{-- Filter thumbnails (contoh) --}}
    <a href="{{ route('produk.index', ['kategori' => 'jaket']) }}" class="flex-shrink-0" style="width: 100px; scroll-snap-align: start;">
        <img src="{{ asset('images/filter-jaket.jpg') }}" class="img-fluid rounded" alt="Filter Jaket">
    </a>
    <a href="{{ route('produk.index', ['kategori' => 'celana']) }}" class="flex-shrink-0" style="width: 100px; scroll-snap-align: start;">
        <img src="{{ asset('images/filter-celana.jpg') }}" class="img-fluid rounded" alt="Filter Celana">
    </a>
    <a href="{{ route('produk.index', ['kategori' => 'sepatu']) }}" class="flex-shrink-0" style="width: 100px; scroll-snap-align: start;">
        <img src="{{ asset('images/filter-sepatu.jpg') }}" class="img-fluid rounded" alt="Filter Sepatu">
    </a>
    <a href="{{ route('produk.index', ['kategori' => 'atasan']) }}" class="flex-shrink-0" style="width: 100px; scroll-snap-align: start;">
        <img src="{{ asset('images/filter-atasan.jpg') }}" class="img-fluid rounded" alt="Filter Atasan">
    </a>
    {{-- Tambah filter lain jika ada --}}
</div>

<!-- PRODUK HORIZONTAL SCROLL -->
<h5 class="fw-bold mb-2">Product</h5>
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
    @php
        $slug = Str::slug($produk['nama']);
    @endphp
    <div class="product-card">
        <div class="product-image-wrapper mb-2">
            <img src="{{ asset('storage/produk/' . $produk['gambar']) }}" alt="{{ $produk['nama'] }}" class="product-image">
        </div>
        <p class="mb-1 fw-semibold">{{ $produk['nama'] }}</p>
        <a href="{{ url('/produk/detail/' . $slug) }}" class="text-decoration-none text-dark">
            <div class="product-price">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</div>
        </a>
    </div>

    @endforeach
</div>
@endsection
