<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Detail Buku</title>
</head>
<body>
	<h1>Detail Buku</h1>
	<p>Kode: {{ $buku['kode'] }}</p>
	<p>Judul: {{ $buku['judul'] }}</p>
	<p><a href="{{ url('/buku') }}">Kembali ke daftar</a></p>
</body>
</html>