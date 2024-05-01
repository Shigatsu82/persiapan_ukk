<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
</head>
<body>
    <form action="{{route('categories.update', $categories->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="kategori">Kategori</label>
        <select name="kategori" id="">
            @foreach ($options as $item => $itemLabel)
                <option value="{{$item}}" {{($categories->kategori == $item) ? 'selected' : '' }}>{{$itemLabel}}</option>
            @endforeach
        </select>
        <label for="deskripsi">Deskripsi Barang</label>
        <input type="text" name="deskripsi" value="{{old('deskripsi', $categories->deskripsi)}}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>