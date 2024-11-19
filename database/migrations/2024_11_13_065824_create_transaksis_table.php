<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_barang');
            $table->timestamp('tgl_transaksi');
            $table->integer('jumlah_beli');
            $table->integer('jumlah_bayar');
            $table->integer('stok_barang');
            $table->integer('kembalian');
            $table->string('keterangan', 100);
            $table->integer('bayar');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
