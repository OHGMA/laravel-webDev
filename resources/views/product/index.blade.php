<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .product {
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 12px;
            margin-bottom: 12px;
        }
        .product h3 {
            margin: 0 0 6px;
        }
        .product p {
            margin: 4px 0;
        }
        .price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>My Produk</h1>

    @forelse($products as $product)
        <div class="product">
            <h3>{{ $product->name }}</h3>
            <p>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
            <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    @empty
        <p>Tidak ada produk tersedia.</p>   
    @endforelse
</body>
</html>
