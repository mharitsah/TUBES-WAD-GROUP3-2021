@extends('layout')
@section('judul','Alamat')
@section('section')
    
<div class="container m-2">
    <div class="row">
        <div class="d-flex justify-content-center">
                    <div class="card border-dark mb-3" style="width: 100%">
                        <div class="card-header">Data Customer</div>
                        <div class="card-body">
                            <form action="{{ url('/alamat/'.auth()->user()->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ $datas->nama_lengkap }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText2" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="exampleInputText2" aria-describedby="textHelp" value="{{ $datas->noHP }}">
                                </div>
                                <div class="card-header">Alamat</div>
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" name="id_pembeli" id="exampleInputText1" aria-describedby="textHelp" value="{{ auth()->user()->id }}">
                                    <label for="exampleInputText1" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" name="provinsi" id="exampleInputText1" aria-describedby="textHelp" value="{{ $datas2->provinsi }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText2" class="form-label">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" name="kota" id="exampleInputText2" aria-describedby="textHelp" value="{{ $datas2->kota }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText2" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="exampleInputText2" aria-describedby="textHelp" value="{{ $datas2->kecamatan }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText3" class="form-label">Kode pos</label>
                                    <input type="text" class="form-control" name="kode_pos" id="exampleInputText3" aria-describedby="textHelp" value="{{ $datas2->kode_pos }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText4" class="form-label">Nama jalan, Gedung, No. Rumah</label>
                                    <input type="text" class="form-control" name="nama_jalan" id="exampleInputText4" aria-describedby="textHelp" value="{{ $datas2->nama_jalan }}">
                                </div>
                                <button type="submit" class="float-lg-end btn btn-outline-success btn-sm m-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection