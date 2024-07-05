<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
</body>
</html>
