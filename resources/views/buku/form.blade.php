<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Form Buku</title>
</head>
<body>
    <h1>{{ $buku->exists ? 'Ubah Buku' : 'Tambah Buku' }}</h1>

    <form method="POST" action="{{ $buku->exists ? route('buku.update', $buku) : route('buku.store') }}">
        @csrf
        @if ($buku->exists)
            @method('PUT')
        @endif

        <p>
            Kode 
            <input name="kode" value="{{ old('kode', $buku->kode) }}">
        </p>
        <p>
            Judul 
            <input name="judul" value="{{ old('judul', $buku->judul) }}">
        </p>
        <p>
            Kategori 
            <select name="kategori_id">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" @selected(old('kategori_id', $buku->kategori_id) == $kategori->id)>
                        {{ $kategori->nama }}
                    </option>
                @endforeach
            </select>
        </p>

        @foreach ($errors->all() as $pesan)
            <p style="color:red;">{{ $pesan }}</p>
        @endforeach

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('buku.index') }}">Kembali</a></p>
</body>
</html>