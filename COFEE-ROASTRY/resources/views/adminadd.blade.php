@extends('layoutadmin')
@section('juduladmin','Alamat')
@section('sectionadmin')

<div class="container-fluid" style="padding-left: 50px; padding-top: 100px">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 65rem;">
            <h3 align="center"><b>Upload Product</b></h3>
            <div class="card-body" style="padding-top: 10px;">
                <form action="/admin/addproduct" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label"><b>Nama Produk/Barang</b></label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Robusta" required>
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label"><b>Berat</b></label>
                        <input type="text" class="form-control" id="berat" name="berat" placeholder="500 gr" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label"><b>Stok</b></label>
                        <input type="text" class="form-control" id="stok" name="stok" placeholder="123" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label"><b>Harga</b></label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Rp. 100.000" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label"><b>Gambar</b></label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" name="submit">TAMBAH</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection