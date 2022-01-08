@extends('layoutadmin')
@section('juduladmin','Alamat')
@section('sectionadmin')

<div class="container-fluid" style=" padding-left: 50px; padding-top: 10px">
            <div class="card p-3 mb-5 bg-body rounded" style="width: 60rem;">
                <table class="table">
                
                <tr>
                    <th scope="col">Tanggal bayar</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col" colspan="3" style="vertical-align : middle;text-align:center;">Aksi</th>
                </tr>
                <tbody>
    @foreach ($datas as $key=>$value)
                    <tr>
                        <td>{{ $value->tanggal_bayar }}</td>
                        <td>{{ $value->id_transaksi }}</td>
                        <td>Rp.{{ $value->total_bayar }}</td>
                        <td>{{ $value->status }}</td>
                        <td>
                        <button data-bs-toggle="modal" data-bs-target="#detail" type="button" class="btn btn-primary" name="detail">Detail</button>
                        </td>
                        <td>
                        <form action="{{ url('/admin/pesanan/terima/'.$value->id_pembayaran) }}" method="post">
                            @csrf
                                <input type="hidden" class="form-control" id="status" name="status" value="sukses">
                            <button class="btn btn-success" name="submit">Terima</button>
                        </form>
                        </td>
                        <td>
                        <form action="{{ url('/admin/pesanan/batal/'.$value->id_pembayaran) }}" method="post">
                            @csrf
                                <input type="hidden" class="form-control" id="status" name="status" value="batal">
                            <button class="btn btn-danger" name="submit">Tolak</button>
                        </form>
                        </td>
                        
                    </tr>

                    
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#" method="#" enctype="multipart/form-data">
                    <div class="mb-3">
                        <img class="img-responsive center-block d-block mx-auto" src="{{ asset('gambar_product/'.$value->bukti_transfer) }}" width="300px">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="kode_transaksi" id="kode transaksi" value="#" hidden>
                        <label for="nama_product" class="form-label"><b>Kode Transaksi</b></label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ $value->id_transaksi }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endforeach

                </tbody>
                </table>
            </div>
        </div>

@endsection