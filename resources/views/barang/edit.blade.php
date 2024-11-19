<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <title>Edit Barang</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Barang</h5>
                </div>
                <div class="card-body">
                    @if ($errors->all())
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang', $barang->nama_barang) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-sm-2 col-form-label">Harga Barang</label>
                            <div class="col-sm-10">
                                <input type="number" name="harga_barang" class="form-control" value="{{ old('harga_barang', $barang->harga_barang) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-sm-2 col-form-label">Jumlah Barang</label>
                            <div class="col-sm-10">
                                <input type="number" name="jumlah_barang" class="form-control" value="{{ old('jumlah_barang', $barang->jumlah_barang) }}">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Update Data</button>
                        <a class="btn btn-primary" href="/barang">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
