@extends('layout')
@section('judul','Status paket')
@section('section')


        <div class="container-fluid" style=" padding-left: 50px; padding-top: 10px">
            <div class="card p-3 mb-5 bg-body rounded" style="width: 60rem;">

                <table class="table">
                
                <tr>
                    <th scope="col">Jasa antar</th>
                    <th scope="col">Pengirim</th>
                    <th scope="col">penerima</th>
                    <th scope="col">alamat tujuan</th>
                    <th scope="col">Kode pos</th>
                    <th scope="col">Status Pesanan</th>
                </tr>
                <tbody>
                    <tr>
                        <td>{{ $datas['data']['courier']['name'] }} {{ $datas['data']['courier']['rate_name'] }}</td>
                        <td>{{ $datas['data']['consigner']['name'] }}</td>
                        <td>{{ $datas['data']['consignee']['name'] }}</td>
                        <td>{{ $datas['data']['destination']['address'] }}, {{ $datas['data']['destination']['city_name'] }}</td>
                        <td>{{ $datas['data']['destination']['postcode'] }}</td>
                        <td>{{ $datas['data']['shipment_status']['name'] }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <a class="btn btn-danger btn-sm mt-2 d-flex justify-content-center" href="/home" data-abc="true" style="width: 91%">Kembali</a>
        </div>

@endsection