<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazt Preloved</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>

/* === GLOBAL BACKGROUND === */
body {
    background-color:rgb(213, 207, 207); /* abu-abu muda, bisa diganti #e0e0e0 atau lebih gelap */
    margin: 0;
    padding: 0;
}


.navbar {
    margin-bottom: 1rem; /* jarak 16px, bisa disesuaikan */
}

    /* Brand */
    .navbar-brand {
        font-size: 1.2rem;
        letter-spacing: 0.5px;
    }

    /* Link */
    .nav-link {
        color: #333 !important;
        transition: color 0.2s ease-in-out;
    }
    .nav-link:hover,
    .nav-link.active {
        color:rgb(191, 197, 206) !important;
    }

    /* Search */
    .form-control {
        border-radius: 20px;
        border: 1px solid #ddd;
    }
    .form-control:focus {
        box-shadow: none;
        border-color:rgb(160, 183, 216);
    }

    /* Ikon */
    .bi {
        color: #555;
        transition: color 0.2s ease-in-out;
    }
    .bi:hover {
        color:rgb(230, 235, 243);
    }



.struk-wrapper {
    max-width: 480px;
    margin: auto;
}

.countdown-box {
    border-radius: 15px;
    background-color: #fff;
}

.payment-info {
    background-color: #fff;
}

@media (max-width: 576px) {
    .struk-wrapper p, .struk-wrapper h5 {
        font-size: 0.95rem;
    }

    #countdown {
        font-size: 1.25rem;
    }
}


.bayar-wrapper {
    max-width: 480px;
    margin: auto;
}

.ticket {
    background-color: #ffffff;
    border-radius: 20px;
    position: relative;
}

.ticket::before,
.ticket::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background: #dcdcdc;
    border-radius: 50%;
}

.ticket::before {
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
}

.ticket::after {
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
}

@media (max-width: 576px) {
    .ticket {
        padding: 1.5rem;
    }
    .ticket .text-end {
        font-size: 0.85rem;
    }
}


/* === KERANJANG STYLING === */
.keranjang-container {
    padding: 20px;
    background-color:rgb(148, 159, 179);
    min-height: 100vh;
    display: flex;
    justify-content: center;
}

.keranjang-card {
    background: #fff;
    border-radius: 20px;
    max-width: 600px;
    width: 100%;
    overflow: hidden;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
}

.keranjang-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.keranjang-content {
    padding: 20px;
}

.produk-title {
    font-weight: bold;
    font-style: italic;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.produk-info {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    font-size: 0.95rem;
    margin-bottom: 20px;
}

.fitur, .material {
    flex: 1 1 45%;
}

.label {
    font-weight: bold;
    margin-bottom: 6px;
}

.aksi-button {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}

.btn-chat, .btn-buy, .btn-cart {
    flex: 1 1 auto;
    border: none;
    padding: 10px 16px;
    border-radius: 12px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-chat {
    background: #fff;
    border: 2px solid #000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-buy {
    background: #fff;
    border: 2px solid #000;
}

.btn-cart {
    background: #000;
    color: #fff;
}

.btn-chat:hover, .btn-buy:hover {
    background: #e0e0e0;
}

.btn-cart:hover {
    background: #333;
}

/* Responsive Mobile */
@media (max-width: 576px) {
    .produk-info {
        flex-direction: column;
    }

    .aksi-button {
        flex-direction: column;
    }
}

.filter-section {
        background-color: #d1d1d1;
        padding: 20px 0;
    }

    .filter-header {
        font-weight: bold;
        font-size: 20px;
    }
    .banner-image {
        height: 160px; /* atau 180px sesuai desain kamu */
        object-fit: cover;
        border-radius: 12px;
    }
/* Produk Scroll */
.product-card {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        width: 220px;
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }


.product-image-wrapper {
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 8px;
        overflow: hidden;
        background-color:rgb(228, 230, 241);
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

 .product-name {
    font-weight: 600;
    font-size: 14px;
    text-align: center;
    margin-top: 8px;
    min-height: 36px; /* untuk membuat teks tetap rata */
    line-height: 1.2;
}

.product-price {
        font-weight: bold;
        background-color:rgb(6, 5, 5);
        padding: 6px;
        font-size: 14px;
        border-radius: 6px;
        margin-top: 4px;
        width: 100%;
        text-align: center;
    }

.produk-scroll {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        padding-bottom: 10px;
        scroll-snap-type: x mandatory;
    }

    .produk-scroll > * {
        scroll-snap-align: start;
    }


.product-image-wrapper {
    width: 100%;
    aspect-ratio: 1 / 1;
    overflow: hidden;
    border-radius: 10px;
    background-color:rgb(13, 9, 9);
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.product-card {
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 0.5rem;
    min-width: 150px;
}
.product-price {
    background-color:black;
     color: white;
    font-weight: bold;
    font-size: 14px;
    padding: 2px;
}

.filter-thumbnail {
        cursor: pointer;
        transition: transform 0.3s ease;
        border-radius: 10px;
        overflow: hidden;
    }

    .filter-thumbnail:hover {
        transform: scale(1.05);
    }

  


</style>
</head>
<body>
<div class="container my-4">
    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>