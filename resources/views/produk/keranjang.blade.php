@extends('layouts.app')

@section('content')

<div class="container my-4">
    <a href="{{ url('produk') }}" class="text-decoration-none text-secondary mb-3 d-block">
        ← Kembali
    </a>

<div class="keranjang-container">
    <div class="keranjang-card">
        {{-- Gambar Produk --}}
        <div class="keranjang-image">
            <img src="{{ asset('images/cardigan.jpg') }}" alt="Cardigan Knitwear">
        </div>

        {{-- Informasi Produk --}}
        <div class="keranjang-content">
            <h4 class="produk-title">Cardigan Knitwear</h4>

            <div class="produk-info">
                <div class="fitur">
                    <p class="label">Features:</p>
                    <ul>
                        <li>Soft and breathable premium knit fabric</li>
                        <li>Lightweight warmth for all-day comfort</li>
                        <li>Ribbed cuffs and hem for a snug fit</li>
                        <li>Classic button-up front</li>
                        <li>Dual front pockets</li>
                    </ul>
                </div>
                <div class="material">
                    <p class="label">Material:</p>
                    <p>70% Cotton, 30% Acrylic</p>
                    <p>(Anti-shrink & Anti-pilling)</p>
                    <p><strong>Sizes:</strong> XL</p>
                </div>
            </div>

          {{-- Tombol Aksi --}}
<div class="aksi-button d-flex gap-2 mt-3">
    <button class="btn-chat"><i class="bi bi-chat-dots"></i></button>
 <a href="{{ route('bayar') }}" class="btn-buy text-decoration-none"> BUY NOW </a>
    <button class="btn-cart"><i class="bi bi-cart"></i> ADD TO</button>
</div>

@endsection
