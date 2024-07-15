@section('content')
@extends('layouts.app')

@section('title', 'Transaction')

@section('content')
<div class="availability-section">
    <div class="text">
        <h2>Solution for high availability</h2>
        <p>Back up your Windows PCs, Mac devices, and Microsoft OneDrive data to the cloud and never lose a file again.</p>
    </div>
    <img src="{{ asset('assets/img/availability.png') }}" alt="High Availability">
</div>
<div class="product-navigation">
    <ul>
        <li><a href="#transaction">Transaction</a></li>
        <li><a href="{{ route('onlineshop') }}">OnlineShop</a></li>
    </ul>
</div>
<div class="transaction-section">
    <div class="transaction-header">
        <h1>{{ $product }}</h1>
        <p class="price">Rp {{ number_format($price, 0, ',', '.') }}</p>
    </div>
    {{-- <form action="{{ route('processPayment') }}" method="post"> --}}
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact">No. Kontak</label>
            <input type="text" name="contact" id="contact" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">Kota</label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>
        <div class="payment-methods">
            <h3>Silahkan Pilih Metode Pembayaran</h3>
            <div class="payment-options">
                <label><input type="radio" name="payment_method" value="credit_card" required> <img src="{{ asset('assets/img/creditcard.jpg') }}" alt="Credit/Debit Card"></label>
                <label><input type="radio" name="payment_method" value="gopay" required> <img src="{{ asset('assets/img/gopay.jpg') }}" alt="Gopay"></label>
                <label><input type="radio" name="payment_method" value="atm" required> <img src="{{ asset('assets/img/atm.png') }}" alt="ATM"></label>
                <label><input type="radio" name="payment_method" value="ovo" required> <img src="{{ asset('assets/img/ovo.jpg') }}" alt="OVO"></label>
                <label><input type="radio" name="payment_method" value="dana" required> <img src="{{ asset('assets/img/dana.jpg') }}" alt="Dana"></label>
                <label><input type="radio" name="payment_method" value="wallet" required> <img src="{{ asset('assets/img/wallet.jpg') }}" alt="Wallet"></label>
            </div>
        </div>
        <div class="card-details" id="card-details" style="display: none;">
            <div class="form-group">
                <label for="card_number">Nomor Kartu</label>
                <input type="text" name="card_number" id="card_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="expiry_date">Masa Berlaku</label>
                <input type="text" name="expiry_date" id="expiry_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" id="cvv" class="form-control">
            </div>
            <div class="form-group">
                <label for="card_name">Nama Pemegang Kartu</label>
                <input type="text" name="card_name" id="card_name" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proses ke Pembayaran</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethods = document.querySelectorAll('input[name="payment_method"]');
        const cardDetails = document.getElementById('card-details');

        paymentMethods.forEach(method => {
            method.addEventListener('change', function() {
                if (this.value === 'credit_card') {
                    cardDetails.style.display = 'block';
                } else {
                    cardDetails.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection


