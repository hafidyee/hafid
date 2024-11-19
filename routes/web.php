<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/barang', BarangController::class);

Route::get('transaksi/index', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('transaksi/beli/{any}', [TransaksiController::class, 'beli'])->name('transaksi.beli');
Route::post('transaksi/proses', [TransaksiController::class, 'proses'])->name('transaksi.proses');
Route::post('transaksi/bayar', [TransaksiController::class, 'bayar'])->name('transaksi.bayar');
