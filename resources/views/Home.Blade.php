<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #0d1b46;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            margin-left: 20px;
        }
        .nav {
            margin-right: 20px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .nav a:hover {
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
        .about-section {
            display: flex;
            padding: 50px;
            background-color: #f5f5f5;
            color: #333;
        }
        .about-section img {
            max-width: 50%;
            height: auto;
        }
        .about-section .text {
            max-width: 50%;
            margin-left: 20px;
        }
        .about-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .about-section ul {
            list-style: none;
            padding: 0;
        }
        .about-section li {
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
        }
        .about-section li span {
            margin-right: 10px;
            font-weight: bold;
            color: #1f41a6;
        }
        .growth-section {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        .growth-section h2 {
            font-size: 28px;
            margin-bottom: 30px;
        }
        .growth-section .features {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .growth-section .feature {
            text-align: center;
        }
        .growth-section .feature img {
            max-width: 100%;
            height: auto;
        }
        .growth-section .feature p {
            margin-top: 10px;
            font-size: 18px;
        }
        .growth-section .phones {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .growth-section .phone {
            text-align: center;
        }
        .growth-section .phone img {
            width: 150px;
            height: auto;
        }
        .growth-section .phone p {
            margin-top: 10px;
            font-size: 18px;
        }
        .fifth-section {
            background-color: #f5f5f5;
            text-align: center;
            padding: 50px 20px;
        }
        .fifth-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .fifth-section p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
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
            color: rgb(248, 248, 255);
            width: 100%;
        }
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            padding: 10px;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .whatsapp-button a {
            color: white;
            text-decoration: none;
            font-size: 30px;
        }
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }
            .header img {
                margin-left: 0;
                margin-bottom: 10px;
            }
            .nav {
                margin-right: 0;
            }
            .nav a {
                margin: 0 10px;
                font-size: 16px;
            }
            .availability-section, .about-section {
                flex-direction: column;
                padding: 20px;
            }
            .availability-section .text, .about-section .text {
                margin-left: 0;
                margin-top: 20px;
            }
        }
        @media (max-width: 480px) {
            .header {
                padding: 10px;
            }
            .header img {
                width: 150px;
            }
            .nav a {
                font-size: 14px;
                margin: 0 5px;
            }
            .availability-section, .about-section {
                padding: 10px;
            }
            .availability-section h2, .about-section h2, .growth-section h2, .fifth-section h2 {
                font-size: 24px;
            }
            .availability-section p, .about-section p, .growth-section p, .fifth-section p {
                font-size: 16px;
            }
            .growth-section .phones img {
                width: 100px;
            }
            .footer .column {
                margin: 10px 0;
            }
            .footer .column h3 {
                font-size: 16px;
            }
            .footer .column p, .footer .column a {
                font-size: 12px;
            }
        }
    </style>
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
    <div class="availability-section">
        <div class="text">
            <h2>Solution for high availability</h2>
            <p>Back up your Windows PCs, Mac devices, and Microsoft OneDrive data to the cloud and never lose a file again.</p>
        </div>
        <img src="{{ asset('assets/img/availability.png') }}" alt="High Availability">
    </div>
    <div class="about-section">
        <img src="{{ asset('assets/img/about-us.jpg') }}" alt="About Us">
        <div class="text">
            <h2>About Us</h2>
            <ul>
                <li>
                    <span>1</span>
                    <div>
                        <strong>WHO WE ARE / BACKGROUND</strong>
                        <p>We are PT Global Sahabat Otomasi, an engineering company which specializes in Machine Vision and Control. Established by an expert team, who have success in engineering field. They provide a solution base on field case. PT Global Sahabat Otomasi has quickly gained trust from multinational company due their performance in supporting and providing solution for the user.</p>
                    </div>
                </li>
                <li>
                    <span>2</span>
                    <div>
                        <strong>VISION & MISSION</strong>
                        <p>To be the best provider of automation solution in the world and be a Partner for your automation's problem.</p>
                    </div>
                </li>
                <li>
                    <span>3</span>
                    <div>
                        <strong>INDUSTRY 4.0</strong>
                        <p>PT Global Sahabat Otomasi come with paperless solution for every factory, customer also can monitoring their machine through our web based software that already integrated with cloud server so can monitor status of machine and OEE (smart manufacturing). This a new phase in the Industrial Revolution that focuses heavily on interconnectivity, automation, machine learning, and real-time data.</p>
                    </div>
                </li>
                <li>
                    <span>4</span>
                    <div>
                        <strong>ARTIFICIAL INTELLIGENT (AI) VISION</strong>
                        <p>PT Global Sahabat Otomasi has identified very specific needs concerning machine vision systems; as a general tendency, many industries require new vision systems to be adaptive, so that they can be quickly repurposed to inspect new products. Artificial intelligence and statistical inference are the keywords for an easy, fast and reliable approach to the most recent challenges of the Machine Vision world.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="growth-section">
        <h2>BOOST BUSINESS GROWTH WITH ADDCLOUD CLOUD SOLUTIONS</h2>
        <div class="phones">
            <div class="phone">
                <img src="{{ asset('assets/img/phone1.png') }}" alt="Safety & Easy to Save">
                <p>Safety & Easy to Save</p>
            </div>
            <div class="phone">
                <img src="{{ asset('assets/img/phone2.png') }}" alt="Centralized Storage">
                <p>Centralized Storage</p>
            </div>
            <div class="phone">
                <img src="{{ asset('assets/img/phone3.png') }}" alt="Portable & Fast">
                <p>Portable & Fast</p>
            </div>
        </div>
    </div>
    <div class="fifth-section">
        <h2>ADDCLOUD: SOLUSI PENYIMPANAN DATA TERBAIK UNTUK BISNIS ANDA</h2>
        <p>Di era digital yang serba cepat, memiliki solusi penyimpanan data yang handal dan efisien adalah kunci untuk menjalankan bisnis dengan lancar. AddCloud menawarkan solusi penyimpanan data skala besar dengan performa tinggi dan keamanan superior. Dengan AddCloud, data Anda dapat diakses dengan cepat dan responsif, di mana saja dan kapan saja.</p>
        <p>Tidak hanya itu, AddCloud juga menawarkan fleksibilitas yang luar biasa, memungkinkan Anda untuk meningkatkan atau menurunkan kapasitas penyimpanan sesuai kebutuhan bisnis Anda tanpa perlu downtime yang signifikan. Keamanan fisik dan digital yang kami tawarkan memastikan data Anda selalu terlindungi dari ancaman.</p>
        <p>Mulai transformasi digital Anda dengan AddCloud sekarang dan rasakan kemudahan dalam mengelola data bisnis Anda. Tingkatkan efisiensi, kurangi biaya operasional, dan pastikan bisnis Anda selalu siap menghadapi tantangan masa depan dengan AddCloud!</p>
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
            &copy; Global Sahabat Otomsi. All rights reserved.
        </div>
    </footer>
    <div class="whatsapp-button">
        <a href="https://wa.me/6282133902077" target="_blank">
            <img src="assets/img/logo-wa.jpg" alt="WhatsApp" style="width: 30px; height: 30px;">
        </a>
    </div>
</body>
</html>
