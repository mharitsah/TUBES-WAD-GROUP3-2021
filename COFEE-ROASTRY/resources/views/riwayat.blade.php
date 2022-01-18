@extends('layout')
@section('judul','Riwayat')
@section('section')

<div class="container-fluid" style=" padding-left: 50px; padding-top: 10px">

    <form class="row g-3 d-flex justify-content-center" action="/cekresi" method="get">
        @csrf
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Cek resi</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Cek resi anda :">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">ID resi</label>
            <input type="text" class="form-control" name="resi" id="inputPassword2" placeholder="ID resi">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Cek resi</button>
        </div>
    </form>
    @if ($datas->count() === 0)

        <div class="text-center m-5">
        <h1 class="text-muted">Tidak ada riwayat transaksi</h1>
        </div>

    @else
            <div class="card p-3 mb-5 bg-body rounded" style="width: 60rem;">
                <table class="table">
                <tr>
                    <th scope="col">Tanggal bayar</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Aksi</th>
                </tr>
                <tbody>
                @foreach ($datas as $key=>$value)
                    <tr>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->id_transaksi }}</td>
                        <td>Rp. {{ $value->total_bayar }}</td>
                        <td>
                        <a href="{{ url('/konfirmasi/'.$value->id_transaksi) }}" class="btn btn-outline-primary">Lihat Riwayat</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
    @endif
    <a class="btn btn-danger btn-sm mt-2 d-flex justify-content-center" href="/home" data-abc="true" style="width: 91%">Kembali</a>
</div>

@endsection