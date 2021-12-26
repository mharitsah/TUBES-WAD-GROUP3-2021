@extends('layout')
@section('judul','Home')
@section('section')

<div class="container m-2">
    <h3>Item In Your Chart</h3>

<br><br>

    <div class="form-check">
        <input class="form-check-input mt-5" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" style="width:100%">
            <div class="row">
                <div class="col-md-3">
                <div class="aside ms-5"><img src="https://images.tokopedia.net/img/cache/400/WjdAsz/2021/8/28/30fb412c-8e35-4825-bd9d-fe58c79130eb.jpg?ect=4g" class="img-sm" width="150px"></div>
                </div>

                <div class="col-md-2">
                <div class="m-4">500 Gr 
                <h4>Robusta</h4>
                </div>
                <div class="input-group mb-3">
                <input type="number" class="form-control ms-4" placeholder="(Pcs)" aria-label="jumlah" >
                </div>
                </div>
                
                <div class="col-md-6 mx-auto">
                    <div class="mt-5 float-end">Rp. 120.000 <br><br>
                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a>
                    </div>
                </div>
            </div>
        <hr>
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input mt-5" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" style="width:100%">
            <div class="row">
                <div class="col-md-3">
                <div class="aside ms-5"><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/8/21/9396396/9396396_633db9f5-ec6b-4c4c-a76d-45c00e75d1a4_444_444.jpg" class="img-sm" width="150px"></div>
                </div>

                <div class="col-md-2">
                <div class="m-4">500 Gr 
                <h4>Green Cofee</h4>
                </div>
                <div class="input-group mb-3">
                <input type="number" class="form-control ms-4" placeholder="(Pcs)" aria-label="jumlah" >
                </div>
                </div>
                
                <div class="col-md-6 mx-auto">
                    <div class="mt-5 float-end">Rp. 120.000 <br><br>
                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a>
                    </div>
                </div>
            </div>
        <hr>
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input mt-5" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" style="width:100%">
            <div class="row">
                <div class="col-md-3">
                <div class="aside ms-5"><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/12/20/72317749/72317749_6b285745-f17e-4540-9534-bcf41c5eabf8_980_980.jpg" class="img-sm" width="150px"></div>
                </div>

                <div class="col-md-2">
                <div class="m-4">500 Gr 
                <h4>Kopi Cinta</h4>
                </div>
                <div class="input-group mb-3">
                <input type="number" class="form-control ms-4" placeholder="(Pcs)" aria-label="jumlah" >
                </div>
                </div>
                
                <div class="col-md-6 mx-auto">
                    <div class="mt-5 float-end">Rp. 120.000 <br><br>
                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a>
                    </div>
                </div>
            </div>
        <hr>
        </label>
    </div>

    <div class="row mt-5">
        <div class="container">
        <div style="float:right">
            <div>
                <h6>Sub Total</h6>
                <h6>Rp. 360.000</h6>
            </div>
            <a class="btn btn-outline-success btn-sm mt-2" href="#" data-abc="true">Checkout</a>
        </div>
        </div>
    </div>

</div>

@endsection