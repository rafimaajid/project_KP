@extends('layouts.app')

@section('title', 'Contact')

@section('content')
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
@endsection


