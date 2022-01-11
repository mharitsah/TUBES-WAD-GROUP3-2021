@extends('layoutadmin')
@section('juduladmin','Edit produk')
@section('sectionadmin')

<div class="container-fluid" style="padding-left: 50px; padding-top: 100px">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 65rem;">
            <h3 align="center"><b>Halamat edit</b></h3>
            <div class="card-body" style="padding-top: 10px;">
                <form action="{{ url('/admin/editproduct/'.$datas->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label"><b>Nama Produk/Barang</b></label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $datas->nama_barang }}" placeholder="Robusta" required>
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label"><b>Berat</b></label>
                        <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" value="{{ $datas->berat }}" placeholder="500 gr">
                        @error('berat')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label"><b>Stok</b></label>
                        <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ $datas->stok }}" placeholder="123">
                        @error('stok')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label"><b>Harga</b></label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $datas->harga }}" placeholder="Rp. 100.000">
                        @error('harga')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label"><b>Gambar</b></label>
                        <input type="file" class="form-control" id="gambar" value="{{ $datas->gambar }}" name="gambar" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" name="submit">UBAH DATA</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection