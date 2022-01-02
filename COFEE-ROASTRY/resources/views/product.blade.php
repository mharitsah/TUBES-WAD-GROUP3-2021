@extends('layout')
@section('judul','Product')
@section('section')

<div class="row">
    @if(session()->has('addChart'))
    <div class="alert alert-success text-center" role="alert">
    {{ session('addChart') }}
    </div>
    @endif
    <div class="col-md-3">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3" style="width: 100%">
            <form action="/cari" method="post">
                @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            </form>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link disabled text-dark" href="#item-1">Semua produk</a>
                <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1-1">Discount</a>
                </nav>
                <a class="nav-link disabled text-dark" href="#item-2">Kategori</a>
                <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-2-1">Beans</a>
                <a class="nav-link ms-3 my-1" href="#item-2-2">Powder</a>
                <a class="nav-link ms-3 my-1" href="#item-2-3">Tools</a>
                </nav>
                <a class="nav-link disabled text-dark" href="#item-3">Urutan</a>
                <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1">Terpopuler</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2">Terbaru</a>
                <a class="nav-link ms-3 my-1" href="#item-3-3">Terlama</a>
                <a class="nav-link ms-3 my-1" href="#item-3-4">Harga Tinggi</a>
                <a class="nav-link ms-3 my-1" href="#item-3-5">Harga Terendah</a>
                <a class="nav-link ms-3 my-1" href="#item-3-6">Nama Produk (A-Z)</a>
                </nav>
            </nav>
        </nav>
    </div>

    <div class="col-md-9">
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
                        <form class ="float-start ms-3" action="/buy" method="post">
                            @csrf
                            <input type="hidden" class="form-control" name="id_pembeli" id="id_pembeli" value="{{ auth()->user()->id }}"/>
                            <input type="hidden" class="form-control" name="nama_produk" id="nama_produk" value="{{ $value->nama_barang }}"/>
                            <input type="hidden" class="form-control" name="berat" id="berat" value="{{ $value->berat }}"/>
                            <input type="hidden" class="form-control" name="harga" id="harga" value="{{ $value->harga }}"/>
                            <input type="hidden" class="form-control" name="gambar" id="gambar" value="{{ $value->gambar }}"/>
                            <button type="submit" class="btn btn-outline-success btn-sm m-2" data-abc="true">Add to chart</button>
                        </form> 
                        <a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true" data-bs-toggle="modal" data-bs-target="#produk{{ $value->id }}">Detail</a>
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
            
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="https://cf.shopee.co.id/file/006705ae05d0425320bda4b5caedc5c7" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Cofee Mix</h4>
                        <p class="text-muted">Starting from $50</p><a class="btn btn-outline-success btn-sm m-2" href="#" data-abc="true">Buy Products</a><a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="https://images.tokopedia.net/img/cache/500-square/attachment/2020/9/17/66236640/66236640_08a0a2e6-f16d-485b-8669-f88eccb7e280.jpg" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Cofee Arabika</h4>
                        <p class="text-muted">Starting from $9</p><a class="btn btn-outline-success btn-sm m-2" href="#" data-abc="true">Buy Products</a><a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="https://cf.shopee.co.id/file/006705ae05d0425320bda4b5caedc5c7" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Cofee Mix</h4>
                        <p class="text-muted">Starting from $50</p><a class="btn btn-outline-success btn-sm m-2" href="#" data-abc="true">Buy Products</a><a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-100">
    
</div>

@endsection