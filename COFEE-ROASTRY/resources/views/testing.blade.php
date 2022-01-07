@extends('layout')
@section('judul','Order')
@section('section')

<div class="container">
    <div class="row text-center">
        <h1>ini adalah halaman testing</h1>

        @foreach ($testdata as $key=>$value)
            <p>Nama pembeli :   {{ $value->nama_produk }}</p>
        @endforeach

        <hr>

        @if ($statushow->status === 'tunggu')

        <p>pesan ini di tampilkan jika status tunggu</p>
        <i class="fas fa-exclamation-circle fa-5x text-warning"></i>

        @elseif ($statushow->status === 'batal')

        <p>pesan ini di tampilkan jika status batal</p>
        <i class="fas fa-times-circle fa-5x text-danger"></i>

        @else
        <p>pesan ini di tampilkan jika status sukes</p>
        <i class="fas fa-check-circle fa-5x text-success"></i>
        @endif

    </div>
</div>


@endsection