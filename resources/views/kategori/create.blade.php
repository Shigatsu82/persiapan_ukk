<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Insert</title>
</head>
<body>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label for="kategori">Kategori</label>
        <select name="kategori" id="">
            @foreach ($jenis as $item)
                <option value="{{$item}}">{{$item}}</option>
            @endforeach
        </select>
        <label for="deskripsi">Deskripsi Barang</label>
        <input type="text" name="deskripsi">
        <button type="submit">Submit</button>
    </form>
</body>
</html>