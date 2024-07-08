@extends('layouts.app')

@section('title', 'Products')

@section('content')
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
@endsection

