@extends('layout')
@section('judul','Status Pesanan')
@section('section')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 80%">
            <div class="card-body m-2">
            <?php 
                $grandtotal = 0;
            ?>
            @foreach ($bayar as $key=>$value)
            <?php 
                $subtotal = $value["harga"] * $value["jumlah"];

                $grandtotal += $subtotal;
            ?>
            @endforeach
            <p class="text-muted">Catatan</p>
                <p><b>Mohon untuk melakukan transaksi sesuai arahana dan instruksi !</b></p>
                <p class="text-muted">No. Rekening</p>
                <p>01783505704</p>
                <p class="text-muted">Batas Pembayaran</p>
                <p>{{ now()->addDays(2)->format('Y-m-d') }} (48 Jam)</p>
                <p>Total Bayar</p>
                <p><b> Rp. {{ $grandtotal }}</b></p>
                <p class="text-muted">Submit bukti pembayaran</p>
                <form action="{{ url('/pembayaran/'.auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm" name="bukti_transfer" id="formFileSm" type="file" required>
                        <input type="hidden" class="form-control" name="id_transaksi" id="exampleInputText1" aria-describedby="textHelp" value="{{ rand(0, 99999999); }}">
                        <input type="hidden" class="form-control" name="tanggal_bayar" id="exampleInputText1" aria-describedby="textHelp" value="{{ date("Y-m-d"); }}">
                        <input type="hidden" class="form-control" name="id_pembeli" id="exampleInputText1" aria-describedby="textHelp" value="{{ auth()->user()->id }}">
                        <input type="hidden" class="form-control" name="total_bayar" id="exampleInputText1" aria-describedby="textHelp" value="{{ $grandtotal }}">
                        <input type="hidden" class="form-control" name="status" id="exampleInputText1" aria-describedby="textHelp" value="tunggu">
                    </div>
                    <button type="submit" class="float-lg-end btn btn-outline-success btn-sm mt-2">Kirim</button>
                </form>
                <a class="float-lg-end btn btn-outline-danger btn-sm m-2" href="{{ url('/product')}}" data-abc="true">Kembali belanja</a>
            </div>
        </div>
    </div>
</div>

@endsection