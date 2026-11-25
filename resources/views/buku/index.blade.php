<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <p>Masuk sebagai {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Keluar</button>
    </form>

    @can('kelola-buku')
        <p><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
    @endcan

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Judul</th>
            <th>Kategori</th>
            @can('kelola-buku')
                <th>Aksi</th>
            @endcan
        </tr>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $buku->kode }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori->nama }}</td>
            @can('kelola-buku')
                <td>
                    <a href="{{ route('buku.edit', $buku) }}">Ubah</a>
                    <form method="POST" action="{{ route('buku.destroy', $buku) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            @endcan
        </tr>
        @endforeach
    </table>
</body>
</html>