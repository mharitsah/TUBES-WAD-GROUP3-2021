@extends('layout')
@section('judul','Home')
@section('section')

<div class="row">
    <div class="col-md-2">
    <ul class="list-group">
        <li class="list-group-item">Semua produk</li>
        <li class="list-group-item">Discount</li>
        <li class="list-group-item">Kategori</li>
        <li class="list-group-item">Beans</li>
        <li class="list-group-item">Powder</li>
        <li class="list-group-item">Tools</li>
        <li class="list-group-item">Urutan</li>
        <li class="list-group-item">Terpopuler</li>
        <li class="list-group-item">Terbaru</li>
        <li class="list-group-item">Terlama</li>
        <li class="list-group-item">Nama Produk</li>
    </ul>
    </div>
    <div class="col-md-10">
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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