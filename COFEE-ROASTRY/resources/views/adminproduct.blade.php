@extends('layoutadmin')
@section('juduladmin','Admin Product')
@section('sectionadmin')
    
<div class="container-fluid" style=" padding-left: 80px; padding-top: 10px">
        <a href="/admin/tambah" class="btn shadow btn-outline-primary">Tambah Produk</a>
            <div class="card shadow p-3 mb-5 bg-body rounded mt-2" style="width: 60rem;">
                <table class="table">
                
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
                <tbody>
                @foreach ($datas as $key=>$value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td><img class="img-responsive center-block d-block mx-auto" src="{{ asset('gambar_product/'.$value->gambar) }}" width="100px"></td>
                        <td>{{ $value->nama_barang }}</td>
                        <td>{{ $value->berat }}</td>
                        <td>{{ $value->stok }}</td>
                        <td>Rp. {{ $value->harga }}</td>
                        <td>
                        <a href="{{ url('/admin/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('/admin/hapus/'.$value->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
                </table>
            </div>
        </div>

@endsection