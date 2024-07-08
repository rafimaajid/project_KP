<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="header">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Global" height="50">
        <div class="nav">
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/products') }}">Product</a>
            <a href="{{ url('/article') }}">Article</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </div>
    </div>
    @yield('content')
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
    <div class="whatsapp-button">
        <a href="https://wa.me/6282133902077" target="_blank">
            <img src="assets/img/logo-wa.jpg" alt="WhatsApp" style="width: 30px; height: 30px;">
        </a>
    </div>
</body>
</html>

