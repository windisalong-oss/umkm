<?php

use App\Http\Controller\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');

Route::get('/login', [HomeController::class, 'index'])->name('beranda');
Route::get('/daftar', [HomeController::class, 'index'])->name('daftar');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/admin/user', [HomeController::class, 'index'])->name('admin.kelolauser');
Route::get('/admin/kategri', [HomeController::class, 'index'])->name('admin.kategori');
Route::get('/admin/produk', [HomeController::class, 'index'])->name('admin.produk');
Route::get('/admin/mitra', [HomeController::class, 'index'])->name('admin.mitra');

Route::get('/produk', [HomeController::class, 'index'])->name('produk');
Route::get('/produk/tambah', [HomeController::class, 'index'])->name('produk.tambah');
Route::get('/menu', [HomeController::class, 'index'])->name('menu');

Route::get('/kategori', [HomeController::class, 'index'])->name('kategori');
