<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Edit Stok Barang</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Edit Stok Barang</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('toko.update', $data->id) }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                            @csrf

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('IdBarang') is-invalid @enderror" name="IdBarang" type="text"
                                       placeholder="IdBarang" value="{{ $data->IdBarang ? $data->IdBarang : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('IdBarang')
                            <div class="alert alert-danger">
                                Id Barang Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('NamaBarang') is-invalid @enderror" name="NamaBarang" type="text"
                                       placeholder="Nama Barang" value="{{ $data->NamaBarang ? $data->NamaBarang : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('NamaBarang')
                            <div class="alert alert-danger">
                                Nama Barang Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('Merk') is-invalid @enderror" name="Merk" type="text"
                                       placeholder="Merk" value="{{ $data->Merk ? $data->Merk : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('Merk')
                            <div class="alert alert-danger">
                                Merk Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('JumlahStock') is-invalid @enderror" name="JumlahStock" type="text"
                                       placeholder="JumlahStock" value="{{ $data->JumlahStock ? $data->JumlahStock : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('JumlahStock')
                            <div class="alert alert-danger">
                                Jumlah Stock Salah
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                            <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>