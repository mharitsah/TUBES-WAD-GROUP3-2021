@extends('layout')
@section('judul','Konfirmasi')
@section('section')
    
<div class="container m-2">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 80%">
            <div class="card-body m-2 text-center">
        @if ($statushow->status === 'tunggu')

        <i class="fas fa-exclamation-circle fa-5x text-warning"></i>
        <br>
        <br>
        <p>Menunggu konfirmasi pesanan</p>

        @elseif ($statushow->status === 'batal')

        <i class="fas fa-times-circle fa-5x text-danger"></i>
        <br>
        <br>
        <p>Pesanan anda ditolak oleh admin, uang anda akan dikembalikan 1x24 jam</p>

        @else
        <i class="fas fa-check-circle fa-5x text-success"></i>
        <br>
        <br>
        <p>Pesanan anda telah dikonfirmasi, pesanan akan di antarkan melalui jasa antar</p>
        @endif
            <div class="mt-5">
            <a class="btn btn-outline-danger btn-sm m-2" href="{{ url('/product')}}" data-abc="true">Kembali belanja</a>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection