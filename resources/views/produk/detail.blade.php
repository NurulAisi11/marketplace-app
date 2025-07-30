@extends('layouts.app')

@php use Illuminate\Support\Str; @endphp


@section('content')
<div class="container my-4">
    <a href="{{ url('/') }}" class="text-decoration-none text-secondary mb-3 d-block">
        ← Kembali
    </a>

    <div class="text-center mb-4">
       <img src="{{ asset('images/' . $produk['gambar']) }}" alt="{{ $produk['nama'] }}" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">

    </div>

    <div class="bg-white p-4 rounded shadow-sm" style="border-radius: 24px;">
        <h3 class="fw-bold mb-1" style="font-style: italic;">{{ $produk['nama'] }}</h3>
<p class="text-muted mb-3" style="font-style: italic;">{{ $produk['warna'] ?? '' }}</p>

        <p class="text-secondary mb-3">
            Stay Warm, Stay Sharp.<br>
            Elevate your everyday look with this premium navy knit cardigan.<br>
            Perfect for both work and weekend — soft, versatile, and effortlessly stylish.
        </p>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <h4 class="fw-bold fst-italic text-dark mb-0">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</h4>
            <a href="#" class="btn btn-dark shadow rounded-pill px-4 py-2 fw-bold">Details</a>
        </div>
    </div>
</div>
@endsection