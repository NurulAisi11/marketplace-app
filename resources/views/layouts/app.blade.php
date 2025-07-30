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

.product-card {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        width: 160px;
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
        background-color: #f5f5f5;
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
        background-color: #f1f1f1;
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
    background-color: #f8f8f8;
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
    background-color: #eee;
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


    <style>
        body {
            background-color: #f0f8ff;
        }

        .navbar {
            background-color: #87cefa;
        }

        .footer {
            background-color: #87cefa;
            padding: 1rem;
            text-align: center;
            color: white;
            margin-top: 2rem;
        }

        .product-image-wrapper {
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            border-radius: 10px;
            background-color: #f8f8f8;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 0 4px rgba(0,0,0,0.05);
        }

        .product-title {
            font-size: 16px;
            font-weight: 600;
        }

        .product-price {
            font-weight: bold;
            font-size: 16px;
            color: #000;
            background-color: #eee;
            padding: 4px;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Nazt Preloved</a>
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
