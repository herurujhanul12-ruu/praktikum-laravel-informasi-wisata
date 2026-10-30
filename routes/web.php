<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

Route::get('/panduan', [HomeController::class, 'panduan'])->name('panduan');

Route::get('/destinasi', [WisataController::class, 'index'])->name('destinasi.index');

Route::get('/kategori', [WisataController::class, 'kategori'])->name('kategori');

Route::get('/destinasi/{slug}', [WisataController::class, 'show'])->name('destinasi.show');