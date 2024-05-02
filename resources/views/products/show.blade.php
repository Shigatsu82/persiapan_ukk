<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
</head>
<body>
    <h1>Ini Detail</h1>
    <div class="card">
        <h3>{{ $products->merk }}</h3>
        <p>Spesifikasi: {{ $products->spesifikasi }}</p>
        <p>Seri: {{ $products->seri }}</p>
        <p>Stok: {{ $products->stok }}</p>
    </div>
</body>
</html>