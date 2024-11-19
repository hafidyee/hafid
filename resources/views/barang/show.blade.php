<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Detail Barang</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="card">
                <div class="card-header">
                    <h5>Detail Barang</h5>
                </div>
                <div class="card-body">
                    <p>Nama Barang: <b>{{ $barang->nama_barang }}</b></p>
                    <p>Harga Barang: <b>{{ number_format($barang->harga_barang) }}</b></p>
                    <p>Jumlah Barang: <b>{{ $barang->jumlah_barang }}</b></p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="/barang">Kembali</a>
                </div>
            </div>
        </div>
    </body>
</html>
