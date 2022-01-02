@extends('layout')
@section('judul','Order')
@section('section')


<div class="container m-2">
    <div class="row">
        <div class="col-md-6">
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="width: 100%">
                <div class="card-header text-center">Alamat</div>
                <div class="card-body d-grid gap-2">
                <a class="btn btn-outline-primary btn-sm mt-2" href="{{ url('/alamat/'.auth()->user()->id) }}" data-abc="true">Isi alamat</a>
                </div>
            </div>
        </div>
        </div>

        
        <div class="col-md-6">
        <div class="d-flex justify-content-center">
            <div class="card border-dark mb-3" style="width: 100%">
                <div class="card-header">Order Review</div>
                <div class="card-body text-dark">
                    <h5 class="card-title mb-3">{{ count($datas) }} Items</h5>
                    <div class="container">

                        <?php 
                            $grandtotal = 0;
                        ?>
                        @foreach ($datas as $key=>$value)
                        <?php 
                            $subtotal = $value["harga"] * $value["jumlah"];
                        ?>
                        <div class="row">
                            <div class="col">
                                <div class="aside"><img src="{{ asset('gambar_product/'.$value->gambar) }}" class="img-sm" width="100px"></div>
                            </div>
                            <div class="col">
                                <div class="float-lg-start">
                                <h4>{{ $value->nama_produk }}</h4>
                                <p>x{{ $value["jumlah"] }}</p>
                                <p>Rp. {{ $value["harga"] }}</p>
                                <input type="hidden" value="{{ $value->harga }}" id="flexCheckDefault" name="harga[]" onclick="totalIt()">
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php 
                            $grandtotal += $subtotal;
                        ?>
                        @endforeach
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
                            <p>Rp. {{ $grandtotal }}</p>
                            <p>Rp. 0</p>
                            <p><b>Rp. {{ $grandtotal }}</b></p>
                        </div>
                    </div>
                    <div class="float-lg-end">
                    <a class="btn btn-outline-success btn-sm mt-2" href="{{ url('/pembayaran/'.auth()->user()->id) }}" data-abc="true">Checkout</a>
                    <a class="btn btn-outline-danger btn-sm mt-2" href="{{ url('/backchart/'.auth()->user()->id) }}" data-abc="true">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection