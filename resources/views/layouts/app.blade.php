<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nazt Preloved</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

<footer class="footer">
    &copy; 2025 Nazt Preloved
</footer>

</body>
</html>
