<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Daftar Buku</title>
</head>
<body>
	<h1>Daftar Buku</h1>
	<p>Praktikum Pemrograman Web</p>

	<form method="GET" action="{{ url('/buku') }}">
		<p>Cari judul <input name="cari" value="{{ $cari }}"></p>
		<p><button type="submit">Cari</button></p>
	</form>

	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Judul</th>
			<th>Detail</th>
		</tr>
		@foreach ($buku as $item)
		<tr>
			<td>{{ $item['kode'] }}</td>
			<td>{{ $item['judul'] }}</td>
			<td><a href="{{ url('/buku/'.$item['kode']) }}">Lihat</a></td>
		</tr>
		@endforeach
	</table>

	@if (count($buku) === 0)
		<p>Data buku tidak ditemukan.</p>
	@endif
</body>
</html>