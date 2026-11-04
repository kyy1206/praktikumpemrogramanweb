<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
	public static function contoh(): array
	{
		return [
			['kode' => 'BK001', 'judul' => 'Dasar PHP'],
			['kode' => 'BK002', 'judul' => 'Belajar Laravel'],
			['kode' => 'BK003', 'judul' => 'Logika Web'],
			['kode' => 'BK004', 'judul' => 'Pemrograman Pemula'],
		];
	}
}