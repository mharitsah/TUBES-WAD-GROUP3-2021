@extends('layout')
@section('judul','Konfirmasi')
@section('section')
    
<div class="container m-2">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 80%">
            <div class="card-body m-2 text-center">
            <h1><i class="fas fa-exclamation-circle fa-3x text-warning"></i></h1>
            <h5>Menunggu konfirmasi</h5>
            <div class="mt-5">
            <a class="btn btn-outline-danger btn-sm m-2" href="{{ url('/product')}}" data-abc="true">Kembali belanja</a>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection