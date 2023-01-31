<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [JurusanController::class, 'index'])->middleware('auth');
Route::resource('jurusans', JurusanController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'daftarMahasiswa'])->name('daftar-mahasiswa')->middleware('auth');
Route::get('/tabel-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'tabelMahasiswa'])->name('tabel-mahasiswa')->middleware('auth');
Route::get('/blog-mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'blogMahasiswa'])->name('blog-mahasiswa')->middleware('auth');