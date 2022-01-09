@extends('layout')
@section('judul','Riwayat')
@section('section')

<div class="container-fluid" style=" padding-left: 50px; padding-top: 10px">

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
                        <a href="{{ url('/konfirmasi/'.$value->id_transaksi) }}" class="btn btn-primary">Lihat Riwayat</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
    @endif
        </div>

@endsection