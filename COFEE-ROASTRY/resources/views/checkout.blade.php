@extends('layout')
@section('judul','Your Chart')
@section('section')

<div class="container m-2">
    <h3>Item In Your Chart</h3>

<br><br>
    <form action="{{ url('/order/'.auth()->user()->id) }}" method="post">
    @csrf
    @foreach ($datas as $key=>$value)
    <div class="form-check">
        <input class="form-check-input mt-5" type="checkbox" value="{{ $value->harga }}" id="checkAll{{ $value->id }}" name="harga[]" onclick="totalIt()">
        <div class="d-none">
        <input type="checkbox" class="check{{ $value->id }}" name="id_pembeli[]" id="id_pembeli" value="{{ auth()->user()->id }}"/>
        <input type="checkbox" class="check{{ $value->id }}" name="id_produk[]" id="id_produk" value="{{ $value->id }}"/>
        <input type="checkbox" class="check{{ $value->id }}" name="nama_produk[]" id="nama_produk" value="{{ $value->nama_produk }}"/>
        <input type="checkbox" class="check{{ $value->id }}" name="gambar[]" id="gambar" value="{{ $value->gambar }}"/>
        </div>
        <label class="form-check-label" for="flexCheckDefault" style="width:100%">
            <div class="row">
                <div class="col-md-3">
                <div class="aside ms-5"><img src="{{ asset('gambar_product/'.$value->gambar) }}" class="img-sm" width="150px"></div>
                </div>

                <div class="col-md-2">
                <div class="m-4">{{ $value->berat }} Gr 
                <h4>{{ $value->nama_produk }}</h4>
                </div>
                <div class="input-group mb-3">
                <input type="number" class="form-control ms-4" placeholder="(Pcs)" aria-label="jumlah" name="jumlah[]">
                </div>
                </div>
                
                <div class="col-md-6 mx-auto">
                    <div class="mt-5 float-end">Rp. {{ $value->harga }} <br><br>
                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a>
                    <a href="{{ url('/deletechart/'.$value->id) }}" class="btn btn-light" data-abc="true"> Remove</a>
                    </div>
                </div>
            </div>
        <hr>
        </label>
    </div>

    <script>
    $("#checkAll{{ $value->id }}").click(function () {
    $(".check{{ $value->id }}").prop('checked', $(this).prop('checked'));
    });
    </script>
    @endforeach

    <div class="row mt-5">
        <div class="container">
        <div style="float:right">
            <div>
                <h6>Sub Total</h6>
                <h6>Rp. <input value="0" readonly="readonly" type="text" id="total" name="total" style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid #e5e5e5;"/></h6>
            </div>
            <button type="submit" class="btn btn-outline-success btn-sm m-2" data-abc="true">Checkout</button>
        </div>
        </div>
    </div>
    </form>

</div>

@endsection