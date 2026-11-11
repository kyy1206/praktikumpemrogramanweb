<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <p><a href="{{ route('buku.create') }}">Tambah Buku</a></p>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $buku->kode }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori->nama }}</td>
            <td>
                <a href="{{ route('buku.edit', $buku) }}">Ubah</a>
                <form action="{{ route('buku.destroy', $buku) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>