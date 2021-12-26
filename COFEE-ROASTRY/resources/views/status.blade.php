@extends('layout')
@section('judul','Home')
@section('section')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 80%">
            <div class="card-body m-2">
            <p class="text-muted">Catatan</p>
                <p>Cofee Tubruk 2 Bungkus, qualitas terbaik</p>
                <p class="text-muted">No. Rekening</p>
                <p>01783505704</p>
                <p class="text-muted">Batas Pembayaran</p>
                <p>19 Desember 2021</p>
                <p class="text-muted">Submit bukti pembayaran</p>
                <form action="">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <button type="submit" class="float-lg-end btn btn-outline-success btn-sm mt-2">Kirim</button>
                </form>
                <a class="float-lg-end btn btn-outline-danger btn-sm m-2" href="{{ url('/product')}}" data-abc="true">Kembali belanja</a>
            </div>
        </div>
    </div>
</div>

@endsection