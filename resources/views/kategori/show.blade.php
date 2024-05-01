<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kategori</title>
</head>
<body>
    <h1>Detail</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$showCategories->id}}</td>
                <td>{{$showCategories->kategori}}</td>
                <td>{{$showCategories->deskripsi}}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{route('categories.index')}}">Back</a>
</body>
</html>