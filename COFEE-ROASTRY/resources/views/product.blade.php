@extends('layout')
@section('judul','Home')
@section('section')

<div class="row">
    <div class="col-md-3">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3" style="width: 100%">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="https://images.tokopedia.net/img/cache/400/WjdAsz/2021/8/28/30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg?ect=4g" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Cofee Tubruk</h4>
                        <p class="text-muted">Starting from $499</p><a class="btn btn-outline-success btn-sm m-2" href="#" data-abc="true">Buy Products</a><a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true" data-bs-toggle="modal" data-bs-target="#produk1">Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                            <img src="https://images.tokopedia.net/img/cache/400/WjdAsz/2021/8/28/30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg?ect=4g" alt="Category">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless m-3">
                                    <tr>
                                        <th>Nama Produk</th>
                                        <td>Cofee Tubruk Robusta</td>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <td>D'Colle</td>
                                    </tr>
                                    <tr>
                                        <th>Stok Produk</th>
                                        <td>120 Pcs</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp. 300.000</td>
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