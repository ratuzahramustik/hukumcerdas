<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

// Rute untuk halaman utama, login, dan register
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile.show');
    Route::resource('kategori', KategoriController::class);

    Route::post('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::put('/kategori/{kategori}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::delete('kategori/delete/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.delete');

    Route::get('/dashboard', function () {
        return view('dash'); 
    })->name('dashboard');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/infohukum', function () {
        return view('infohukum');
    })->name('infohukum');

    Route::get('/solusi', function () {
        return view('solusi');
    })->name('solusi');

    Route::get('/konsultasi', function () {
        return view('konsultasi');
    })->name('konsultasi');

    Route::get('/question', function () {
        return view('question');
    })->name('question');

    Route::get('/pro', function () {
        return view('pro');
    })->name('pro');

    // Pengertian
    Route::get('/pengertianpidana', function () {
        return view('pengertianpidana');
    })->name('pengertianpidana');

    Route::get('/pengertianperdata', function () {
        return view('pengertianperdata');
    })->name('pengertianperdata');

    Route::get('/pengertianpajakdankeuangan', function () {
        return view('pengertianpajakdankeuangan');
    })->name('pengertianpajakdankeuangan');

    Route::get('/pengertianketenagakerjaan', function () {
        return view('pengertianketenagakerjaan');
    })->name('pengertianketenagakerjaan');

    Route::get('/pengertianham', function () {
        return view('pengertianham');
    })->name('pengertianham');

    // Kategori
    Route::get('/pidana', [KategoriController::class, 'showPidana'])->name('katpidana');
    Route::get('/perdata', [KategoriController::class, 'showPerdata'])->name('katperdata');
    Route::get('/pajak', [KategoriController::class, 'showPajak'])->name('katpajak');
    Route::get('/kerja', [KategoriController::class, 'showKerja'])->name('katkerja');
    Route::get('/ham', [KategoriController::class, 'showHam'])->name('katham');

    Route::get('/pidana/{id}', [KategoriController::class, 'showDeskPidana'])->name('deskpidana');
    Route::get('/perdata/{id}', [KategoriController::class, 'showDeskPerdata'])->name('deskperdata');
    Route::get('/pajak/{id}', [KategoriController::class, 'showDeskPajak'])->name('deskpajak');
    Route::get('/kerja/{id}', [KategoriController::class, 'showDeskKerja'])->name('deskkerja');
    Route::get('/ham/{id}', [KategoriController::class, 'showDeskHam'])->name('deskham');

    // Dokumen
    Route::get('/dokumen1', function () {
        return view('dokumen1');
    })->name('dokumen1');
});
