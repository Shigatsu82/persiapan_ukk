<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Lists</title>
</head>
<body>
    <h1>Ini Product Page</h1>
    @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Merk</th>
                <th>Kategori</th>
                <th>Seri</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->merk }}</td>
                <td>{{ $product->kategori_id }}</td>
                <td>{{ $product->spesifikasi }}</td>
                <td>{{ $product->seri }}</td>
                <td>{{ $product->stok }}</td>   
                <td>
                    <form onsubmit="return confirm('yakin nih?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a href="{{route('products.show', $product->id)}}">Show</a>
                        <a href="{{route('products.edit', $product->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            @empty
                <div>
                    <h1>data kosong</h1>
                </div>
            @endforelse
            
        </tbody>
    </table>
    <a href="{{route('products.create')}}">Add Data</a>
</body>
</html>