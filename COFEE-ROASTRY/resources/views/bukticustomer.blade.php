@extends('layoutadmin')
@section('juduladmin','Bukti Customer')
@section('sectionadmin')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 80%">
            <div class="card-body m-2">
                <div class="row">
                    <div class="col">
                        <p class="text-muted">No. Rekening</p>
                        <p>01783505704</p>
                        <p class="text-muted">Batas Pembayaran</p>
                        <p>{{ now()->addDays(2)->format('Y-m-d') }} (48 Jam)</p>
                        <p class="text-muted">Total Bayar</p>
                        <p><b> Rp. {{ $pembayaran->total_bayar }}</b></p>
                        <p class="text-muted">Alamat</p>
                        <p>Jalan {{ $alamat->nama_jalan }}, kec. {{ $alamat->kecamatan }}, kota {{ $alamat->kota }}, provinsi {{ $alamat->provinsi }}, {{ $alamat->kode_pos }}</p>
                    </div>
                    <div class="col">
                    <p class="text-muted">Bukti Bayar Pelanggan :</p>
                    <img src="{{ asset('gambar_product/'.$pembayaran->bukti_transfer) }}" class="rounded mx-auto d-block" alt="..." style="width: 50%">
                    </div>
                </div>
                <a class="float-lg-end btn btn-outline-danger btn-sm m-2" href="/admin/pesanan" data-abc="true">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection