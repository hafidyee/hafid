<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Data Barang</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="card">
                <div class="card-header">
                    <h5>Data Barang</h5>
                </div>
                <div class="card-body">
                    @if (session('error'))
                        {{  session('error') }}
                    @endif

                    @if (session('success'))
                        {{  session('success') }}
                    @endif

                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Opsi</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($barang as $dt)
                            <tr>
                                <td width="50">{{ $no++ }}</td>
                                <td width="50">{{ $dt->id_barang }}</td>
                                <td>{{ $dt->nama_barang }}</td>
                                <td width="150" align="right">{{ number_format($dt->harga_barang) }}</td>
                                <td width="150" align="right">{{ $dt->jumlah_barang }}</td>
                                <td width="230">
                                    <form onsubmit="return confirm('Hapus?');" action="{{ route('barang.destroy', $dt->id_barang ) }}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="{{ route('transaksi.beli', $dt->id_barang) }}">Beli</a>
                                        <a class="btn btn-secondary btn-sm" href="{{ route('barang.show', $dt->id_barang) }}">Detail</a>
                                        <a class="btn btn-warning btn-sm" href="{{ route('barang.edit', $dt->id_barang) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p>Data barang masih kosong</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a class="btn btn-success" href="/barang/create">Tambah Data</a>
                    <a class="btn btn-warning" href="/transaksi/index">Riwayat Transaksi</a>
                </div>
            </div>
        </div>
    </body>
</html>
