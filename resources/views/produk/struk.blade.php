@extends('layouts.app')

@section('content')
<div class="container my-4 struk-wrapper">
    <div class="text-start mb-3">
        <a href="#" onclick="history.back()" class="text-dark fs-4">&larr;</a>
    </div>

    <p class="text-center text-muted fw-semibold mb-4">
        Thank you for trusting us. Complete your payment <br> immediately before the stock runs out.
    </p>

    <div class="countdown-box p-4 bg-white shadow-sm text-center rounded-4 mb-4">
        <h5 class="fw-bold">Make Payment Immediately</h5>
        <div class="fs-2 fw-bold my-3 d-flex justify-content-center gap-2" id="countdown">
            <span id="hours">23</span> Hours :
            <span id="minutes">55</span> Minute :
            <span id="seconds">17</span> Second.
        </div>
        <small class="text-muted d-block" id="deadline">Before Sunday, Nov 04 2023, 17.17 WIB</small>
    </div>

    <div class="payment-info bg-white p-4 rounded-4 shadow-sm mb-3">
        <p class="mb-1">Transfer to virtual account number:</p>
        <div class="d-flex align-items-center gap-2 fw-bold">
            <img src="{{ asset('images/bca.png') }}" alt="BCA" height="25">
            <span>1086421723907056</span>
        </div>
    </div>

    <div class="bg-white p-4 rounded-4 shadow-sm mb-3">
        <p class="mb-1">Amount to be paid:</p>
        <h5 class="fw-bold">Rp288.000</h5>
    </div>

    <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
        <p class="mb-0">Payment guide:</p>
        <small class="text-muted">You will be redirected to payment instruction after clicking the button.</small>
    </div>

    <a href="{{ route('struk') }}" class="btn btn-dark w-100 fw-bold rounded-pill">BACK TO HOME</a>
</div>
@endsection

@section('scripts')
<script>
    // Countdown timer
    const countdown = () => {
        const deadline = new Date("2025-11-04T17:17:00+07:00").getTime();
        const x = setInterval(() => {
            const now = new Date().getTime();
            const distance = deadline - now;

            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerText = "EXPIRED";
            }
        }, 1000);
    };
    countdown();
</script>
@endsection
