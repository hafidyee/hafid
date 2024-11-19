<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
            'id_barang',
            'tgl_transaksi',
            'jumlah_beli',
            'jumlah_bayar',
            'stok_barang',
            'kembalian',
            'keterangan',
            'bayar'];

    public $timestamps = false;

    public static function getTransaksiWithBarang() {
        return DB::table('transaksi')
                ->leftJoin('barang', 'barang.id_barang', '=', 'transaksi.id_barang')
                ->select('transaksi.*', 'barang.nama_barang', 'barang.harga_barang')
                ->get();
    }
}
