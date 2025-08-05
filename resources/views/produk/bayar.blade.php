@extends('layouts.app')

@section('content')
<div class="container my-4 bayar-wrapper">
    <h4 class="text-center fw-bold">YOUR BILL</h4>

    <div class="ticket rounded-4 shadow-sm mx-auto p-4 bg-white">
        {{-- Alamat dan Kota --}}
        <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
                <p class="mb-1 fw-semibold">From</p>
                <h5 class="fw-bold">BDG</h5>
            </div>
            <div class="flex-grow-1 text-center">
                <i class="bi bi-truck"></i>
                <div class="border-top border-2 mx-2"></div>
            </div>
            <div class="text-end">
                <p class="mb-1 fw-semibold">To</p>
                <h5 class="fw-bold">GRT</h5>
                <p class="small mb-0">Tazqi Ghozwul Fiqri</p>
                <p class="small mb-0">082120148569 Jln. Sukapadang Atas,</p>
                <p class="small mb-0">Desa Kersamenak, Tarogong Kidul,</p>
                <p class="small mb-0">Garut, Jawa Barat 44151</p>
            </div>
        </div>

        <hr>

        {{-- Rincian Tagihan --}}
        <div class="mb-3">
            <div class="d-flex justify-content-between">
                <span>Cardigan Knitwear</span>
                <span>1 &nbsp; Rp258.000</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>admin fees</span>
                <span>Rp30.000 +</span>
            </div>
            <div class="d-flex justify-content-between fw-bold mt-2">
                <span>YOUR BILL</span>
                <span>Rp288.000</span>
            </div>
        </div>

        <hr>

        {{-- Metode Pembayaran --}}
        <p class="fw-semibold mb-2">Pay Methode</p>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="bank" id="bca" checked>
            <label class="form-check-label d-flex align-items-center gap-2" for="bca">
                <img src="{{ asset('images/bca.png') }}" alt="BCA" height="20"> BCA
            </label>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="bank" id="bri">
            <label class="form-check-label d-flex align-items-center gap-2" for="bri">
                <img src="{{ asset('images/bri.png') }}" alt="BRI" height="20"> BRI
            </label>
        </div>

        <button class="btn btn-dark w-100 fw-bold rounded-pill">BUY NOW</button>
    </div>
</div>
@endsection
