@extends('layout')
@section('judul','Home')
@section('section')

<div class="row">
    @if(session()->has('addChart'))
    <div class="alert alert-success text-center" role="alert">
    {{ session('addChart') }}
    </div>
    @endif

    <div class="col-md-12">
        <div class="row">
            @foreach ($datas as $key=>$value)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="{{ asset('gambar_product/'.$value->gambar) }}" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $value->nama_barang }}</h5>
                        <p class="text-muted">{{ $value->berat }} Gr</p>
                        <p class="text-muted">Rp. {{ $value->harga }}</p>
                        <a class="btn btn-outline-primary btn-sm" href="#" data-abc="true" data-bs-toggle="modal" data-bs-target="#produk{{ $value->id }}" style="width: 100%">Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="produk{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                            <img src="{{ asset('gambar_product/'.$value->gambar) }}" alt="Category" style="width: 100%">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless m-3">
                                    <tr>
                                        <th>Nama Produk</th>
                                        <td>{{ $value->nama_barang }}</td>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <td>D'Colle</td>
                                    </tr>
                                    <tr>
                                        <th>Stok Produk</th>
                                        <td>{{ $value->stok }} Pcs</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp. {{ $value->harga }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Buy Products</button>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container mt-100">
    
</div>

@endsection