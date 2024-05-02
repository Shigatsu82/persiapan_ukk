<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
</head>
<body>
    <h1>Edit data disini</h1>
    <form action="{{route('products.update', $products->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="merk">Merk</label>
    <input type="text" name="merk" value="{{old('merk', $products->merk)}}">
    <label for="seri">Seri</label>
    <input type="text" name="seri" value="{{old('seri', $products->seri)}}">
    <label for="spesifikasi">Spesifikasi</label>
    <input type="text" name="spesifikasi" value="{{old('spesifikasi', $products->spesifikasi)}}">
    <label for="stok">Stok</label>
    <input type="text" name="stok" value="{{old('stok', $products->stok)}}">
    <label for="kategori_id">Kategori_id</label>
    <input type="text" name="kategori_id" value="{{old('kategori_id', $products->kategori_id)}}">
    <button type="submit">Update</button>
    </form>
</body>
</html>