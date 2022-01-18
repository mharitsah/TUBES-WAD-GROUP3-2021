@extends('layout')
@section('judul','Order')
@section('section')

Jasa antar <br>
{{ $datas['data']['consigner']['name'] }}
Pengirim <br>
{{ $datas['data']['consigner']['name'] }} <br>
penerima <br>
{{ $datas['data']['consignee']['name'] }} <br>
alamat tujuan <br>
{{ $datas['data']['destination']['address'] }}, {{ $datas['data']['destination']['city_name'] }}
Kode pos <br>
{{ $datas['data']['courier']['name'] }} {{ $datas['data']['courier']['rate_name'] }} 
Status Pesanan <br>
{{ $datas['data']['shipment_status']['name'] }}

@endsection