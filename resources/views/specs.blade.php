@extends('layouts.app')

@section('title', $product['name'] . ' - Specs')

@section('content')
<div class="availability-section">
    <div class="text">
        <h2>Solution for high availability</h2>
        <p>Back up your Windows PCs, Mac devices, and Microsoft OneDrive data to the cloud and never lose a file again.</p>
    </div>
    <img src="{{ asset('assets/img/availability.png') }}" alt="High Availability">
</div>

<div class="product-header">
    <div class="product-title">
        <h1>{{ $product['name'] }}</h1>
        <p>Versatile data management platform for work and more</p>
    </div>
    <div class="product-image">
        <img src="{{ asset('assets/img/' . $product['image']) }}" alt="{{ $product['name'] }}">
    </div>
</div>

<div class="product-navigation">
    <ul>
        <li><a href="{{ route('show', $product['name']) }}">Features</a></li>
        <li><a href="#specs">Specs</a></li>
    </ul>
</div>

<div class="specs-section">
    <h2>Full Specifications</h2>
    <table class="specs-table">
        <tr>
            <th>Capacity</th>
            <td>{{ $product['specs']['Capacity'] }}</td>
        </tr>
        <tr>
            <th>Connector</th>
            <td>{{ $product['specs']['Connector'] }}</td>
        </tr>
        <tr>
            <th>System requirements</th>
            <td>{{ $product['specs']['System requirements'] }}</td>
        </tr>
        <tr>
            <th>Add Cloud Home Mobile App</th>
            <td>{{ $product['specs']['Add Cloud Home Mobile App'] }}</td>
        </tr>
        <tr>
            <th>Compatibility</th>
            <td>{{ $product['specs']['Compatibility'] }}</td>
        </tr>
        <tr>
            <th>Supported Browsers</th>
            <td>{{ $product['specs']['Supported Browsers'] }}</td>
        </tr>
        <tr>
            <th>Supported Streaming Options</th>
            <td>{{ $product['specs']['Supported Streaming Options'] }}</td>
        </tr>
    </table>
    <p class="note">{{ $product['specs']['Note'] }}</p>
</div>
@endsection
