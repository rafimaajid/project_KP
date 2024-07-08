<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Font Awesome Link -->
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
        .availability-section {
            display: flex;
            align-items: center;
            background-color: #003366;
            color: white;
            padding: 50px;
        }
        .availability-section img {
            max-width: 50%;
            height: auto;
        }
        .availability-section .text {
            max-width: 50%;
            margin-left: 20px;
        }
        .availability-section h2 {
            font-size: 28px;
        }
        .availability-section p {
            font-size: 18px;
        }
        .contact-section {
            display: flex;
            padding: 50px;
            background-color: #ffffff;
        }
        .contact-info {
            background-color: #0d1b46;
            color: white;
            padding: 40px;
            flex: 1;
        }
        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contact-info p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .contact-info .icon {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .contact-info .icon i {
            margin-right: 10px;
            font-size: 20px;
        }
        .contact-info .social-icons a {
            color: white;
            font-size: 20px;
            margin-right: 10px;
        }
        .contact-form {
            flex: 1;
            padding: 40px;
            background-color: #f5f5f5;
        }
        .contact-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contact-form input, .contact-form textarea {
            width: calc(50% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form input[type="text"], .contact-form input[type="email"], .contact-form input[type="tel"] {
            display: inline-block;
        }
        .contact-form textarea {
            width: 100%;
            height: 100px;
            resize: none;
        }
        .contact-form .submit-button {
            background-color: #0d1b46;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form .submit-button:hover {
            background-color: #092e73;
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
    <div class="availability-section">
        <div class="text">
            <h2>Solution for high availability</h2>
            <p>Back up your Windows PCs, Mac devices, and Microsoft OneDrive data to the cloud and never lose a file again.</p>
        </div>
        <img src="{{ asset('assets/img/availability.png') }}" alt="High Availability">
    </div>
    <div class="contact-section">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Say something to start a live chat</p>
            <div class="icon">
                <i class="fas fa-phone"></i>
                <p>+62 811 7685 2349</p>
            </div>
            <div class="icon">
                <i class="fas fa-envelope"></i>
                <p>GSO@yahoo.com</p>
            </div>
            <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
                <p>Giora Blue Manhaattan, 128/23 United States</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
        <div class="contact-form">
            <h2>Send us a message</h2>
            <form action="{{ url('/send-message') }}" method="POST">
                @csrf
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
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
