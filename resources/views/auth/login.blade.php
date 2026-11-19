<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <h1>Login Praktikum</h1>
    <form method="POST" action="{{ route('login.proses') }}">
        @csrf
        <p>Email <input type="email" name="email" value="{{ old('email') }}"></p>
        <p>Kata sandi <input type="password" name="password"></p>
        @error('email') <p>{{ $message }}</p> @enderror
        <button type="submit">Masuk</button>
    </form>
</body>
</html>