<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('tamu tanpa login dialihkan ke halaman login', function () {
    $this->get(route('buku.index'))
        ->assertRedirect(route('login'));
});

test('login dengan kata sandi salah menolak autentikasi', function () {
    User::factory()->create([
        'email' => 'mahasiswa@example.test',
        'password' => 'kata-sandi-benar',
    ]);

    $this->post(route('login.proses'), [
        'email' => 'mahasiswa@example.test',
        'password' => 'kata-sandi-salah',
    ])
        ->assertSessionHasErrors('email')
        ->assertRedirect();
});

test('login berhasil meregenerasi sesi dan logout mengakhiri autentikasi', function () {
    $user = User::factory()->create([
        'email' => 'mahasiswa@example.test',
        'password' => 'kata-sandi-benar',
    ]);

    $this->post(route('login.proses'), [
        'email' => $user->email,
        'password' => 'kata-sandi-benar',
    ])
        ->assertRedirect(route('buku.index'));

    $this->assertAuthenticatedAs($user);

    $this->post(route('logout'))
        ->assertRedirect(route('login'));

    $this->assertGuest();
});
