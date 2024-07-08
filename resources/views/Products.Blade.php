<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #0d1b46;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .header .nav a:hover {
            text-decoration: underline;
        }
        .catalog-section {
            padding: 50px;
            background-color: #ffffff;
        }
        .catalog-category {
            margin-bottom: 40px;
        }
        .catalog-category h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .catalog-category p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-item {
            background-color: #f5f5f5;
            padding: 20px;
            flex: 1 1 calc(33.333% - 40px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .product-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .product-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .product-item p {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        .footer {
            background-color: #0d1b46;
            color: white;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .footer .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            width: 100%;
        }
        .footer .logo {
            max-width: 200px;
        }
        .footer .column {
            flex: 1;
            min-width: 200px;
            margin: 10px 20px;
        }
        .footer .column h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .footer .column p,
        .footer .column a {
            font-size: 14px;
            color: white;
            text-decoration: none;
            line-height: 1.6;
        }
        .footer .column a:hover {
            text-decoration: underline;
        }
        .footer .column ul {
            list-style: none;
            padding: 0;
        }
        .footer .column ul li {
            margin-bottom: 10px;
        }
        .footer .social-media {
            display: flex;
            align-items: center;
        }
        .footer .social-media a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: rgb(228, 232, 234);
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="50">
        </div>
        <div class="nav">
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/products') }}">Product</a>
            <a href="{{ url('/article') }}">Article</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </div>
    </div>
    <div class="catalog-section">
        @foreach($categories as $category)
            <div class="catalog-category">
                <h2>{{ $category['name'] }}</h2>
                <p>{{ $category['description'] }}</p>
                <div class="product-grid">
                    @foreach($category['products'] as $product)
                        <div class="product-item">
                            <img src="{{ asset('assets/img/' . $product['image']) }}" alt="{{ $product['name'] }}">
                            <h3><a href="{{ url('/product/' . $product['name']) }}">{{ $product['name'] }}</a></h3>
                            @foreach($product['specs'] as $spec)
                                <p>{{ $spec }}</p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="column">
                <img src="assets/img/footer-logo.png" alt="logo" class="logo">
            </div>
            <div class="column">
                <h3>About Us</h3>
                <p>We‘re AddCloud – your go-to hub when you need more than just storage. We’ve got the cumulus of data handling!</p>
            </div>
            <div class="column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/article') }}">Article</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Our Location</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Krekot Bunder Raya 11A, RT/RW: 004/06 Pasar Baru, Sawah Besar - Jakarta Pusat 10710</p>
                <p><i class="fas fa-phone-alt"></i> +123 456 7890</p>
                <p><i class="fas fa-envelope"></i> addcloud@gmail.com</p>
            </div>
            <div class="column social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; Global Sahabat Otomasi. All rights reserved.
        </div>
    </footer>
</body>
</html>
