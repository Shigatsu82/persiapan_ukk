<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Create</title>
</head>
<body>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="merk">Merk</label>
        <input type="text" name="merk">

        <label for="seri">Seri</label>
        <input type="text" name="seri">
        
        <label for="spesifikasi">Spesifikasi</label>
        <input type="text" name="spesifikasi">
        
        <label for="stok">Stok</label>
        <input type="text" name="stok">
        
        <label for="kategori_id">Kategori</label>
        <input type="text" name="kategori_id">
        <button type="submit">Create</button>
    </form>
</body>
</html>