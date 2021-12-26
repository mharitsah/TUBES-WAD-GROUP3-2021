@extends('layout')
@section('judul','Home')
@section('section')


<div class="container m-2">
    <div class="row">
        <div class="col-md-6">
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="width: 100%">
                <div class="card-header">Kontak</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText2" class="form-label">Nomor Telpon</label>
                            <input type="text" class="form-control" id="exampleInputText2" aria-describedby="textHelp">
                        </div>
                        <div class="card-header">Alamat</div>
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText2" class="form-label">Kota/Kabupaten</label>
                            <input type="text" class="form-control" id="exampleInputText2" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText2" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="exampleInputText2" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText3" class="form-label">Kode pos</label>
                            <input type="text" class="form-control" id="exampleInputText3" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText4" class="form-label">Nama jalan, Gedung, No. Rumah</label>
                            <input type="text" class="form-control" id="exampleInputText4" aria-describedby="textHelp">
                        </div>
                        <button type="submit" class="float-lg-end btn btn-outline-success btn-sm mt-2">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
        </div>
        <div class="col-md-6">
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="width: 100%">
                <div class="card-header">Order Review</div>
                <div class="card-body text-dark">
                    <h5 class="card-title mb-3">2 Items</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="aside"><img src="https://images.tokopedia.net/img/cache/400/WjdAsz/2021/8/28/30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg?ect=4g" class="img-sm" width="100px"></div>
                            </div>
                            <div class="col">
                                <div class="float-lg-start">
                                <h4>Robusta</h4>
                                <p>x1</p>
                                <p>Rp. 150.000</p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="aside"><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/12/20/72317749/72317749_6b285745-f17e-4540-9534-bcf41c5eabf8_980_980.jpg" class="img-sm" width="100px"></div>
                                </div>
                            <div class="col">
                                <div class="float-lg-start">
                                <h4>Kopi Cinta</h4>
                                <p>x1</p>
                                <p>Rp. 150.000</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p>Sub Total</p>
                            <p>Discount</p>
                            <p><b>Total</b></p>
                        </div>
                        <div class="col text-end">
                            <p>Rp. 300.000</p>
                            <p>Rp. 0</p>
                            <p><b>Rp. 300.000</b></p>
                        </div>
                    </div>
                    <div class="float-lg-end">
                    <a class="btn btn-outline-success btn-sm mt-2" href="#" data-abc="true">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection