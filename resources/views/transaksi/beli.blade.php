<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Beli Barang</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="card">
                <div class="card-header">
                    <h5>Beli Barang</h5>
                </div>
                <div class="card-body">
                    @if ($errors->all())
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('transaksi.proses') }}" method="POST">
                        @csrf
                        <p>Barang yang dibeli:<br> <b>{{ $barang->nama_barang }}</b></p>
                        <input type="hidden" name="beli_id" value="{{ $barang->id_barang }}">
                        <p>Harga Satuan:<br> <b>{{ $barang->harga_barang }}</b></p>
                        <input type="hidden" name="beli_harga" value="{{ $barang->harga_barang }}">
                        <p>Stok tersedia:<br> <b>{{ $barang->jumlah_barang }}</b></p>
                        <input type="hidden" name="beli_stok" value="{{ $barang->jumlah_barang }}">
                        <p>Kuantitas beli:<br>
                            <input type="number" name="beli_kuantitas">
                        </p>
                        <button class="btn btn-success" type="submit">Pesan</button>
                        <a class="btn btn-primary" href="/barang">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
