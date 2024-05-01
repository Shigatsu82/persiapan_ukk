<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Kategori</title>
</head>
<body>
    <h1>Ini Header</h1>
    <table>

        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->kategori}}</td>
                <td>{{$category->deskripsi}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="empty-aler">
                Data belum tersedia!
            </div>
            @endforelse
        </tbody>
    </table>
        <a href="{{route('categories.create')}}">Add Categories</a>
    </body>
    </html>