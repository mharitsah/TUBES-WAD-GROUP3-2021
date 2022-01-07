<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\chart;
use App\Models\order;
use App\Models\customer;
use App\Models\alamat;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class productController extends Controller
{
    
    public function index(){
        
        $datas = product::all();

        return view('product', compact('datas'));
    }

    public function chart(){
        
        $keranjang = request()->all();
        
        chart::create($keranjang);

        return redirect('/product')->with('addChart', 'Berhasil menambahkan ke Chart');
    }

    public function chartindex($id){
        
        $datas = chart::where('id_pembeli', $id)->get();

        return view('checkout', compact('datas'));
    }

    public function belanja(Request $request){
        
        for ($i = 0; $i < count($request->id_produk); $i++){
            $inventory[] = [

                'id_produk' => $request->id_produk[$i],
                'nama_produk' => $request->nama_produk[$i],
                'id_pembeli' => $request->id_pembeli[$i],
                'jumlah' => $request->jumlah[$i],
                'harga' => $request->harga[$i],
                'gambar' => $request->gambar[$i]

            ];
        }

        order::insert($inventory);
        return redirect()->to('order/'.auth()->user()->id);

        // return request()->all();

        // order::create($belanja);

        // return redirect('/order');
        
    }

    public function orderindex($id){
        
        $datas = order::where('id_pembeli', $id)->get();


        return view('order', compact('datas'));
    }

    // public function ordercust(Request $request, $id){
        
    //     $customer = customer::find($id);


    //     return view('order', compact('customer'));
    // }
    

    public function alamat($id){

        $datas = customer::find($id);

        $datas2 = alamat::where('id_pembeli', $id)->first();

        return view('alamat', compact('datas','datas2'));
    }

    
    public function isialamat(Request $request, $id){
        
        $hitung = alamat::count('id_pembeli', $id);
        
        if ( $hitung == 0){
            $buat = new alamat();

            $buat->id_pembeli = $request->id_pembeli;
            $buat->provinsi = $request->provinsi;
            $buat->kota = $request->kota;
            $buat->kecamatan = $request->kecamatan;
            $buat->kode_pos = $request->kode_pos;
            $buat->nama_jalan = $request->nama_jalan;

            $buat->save();
            
        }else{
            alamat::where('id_pembeli', $id)->update([
                'id_pembeli' => $request->input('id_pembeli'),
                'provinsi' => $request->input('provinsi'),
                'kota' => $request->input('kota'),
                'kecamatan' => $request->input('kecamatan'),
                'kode_pos' => $request->input('kode_pos'),
                'nama_jalan' => $request->input('nama_jalan')
            ]);
        }


        return redirect()->to('order/'.auth()->user()->id);
    }


    public function pembayaran(Request $request, $id){

        $bayar = order::where('id_pembeli', $id)->get();

        return view('pembayaran', compact('bayar'));
    }


    public function prosesbayar(Request $request, $id){

        $gambar = time().'.'.$request->bukti_transfer->extension();
        $request->bukti_transfer->move(public_path('gambar_product'), $gambar);
        $transaksi = new pembayaran();

        $transaksi->id_transaksi = $request->id_transaksi;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->tanggal_bayar = $request->tanggal_bayar;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->bukti_transfer = $gambar;
        $transaksi->status = $request->status;

        $transaksi->save();
        
        return redirect()->to('konfirmasi/'.auth()->user()->id);
    }

    public function konfirmasi($id){


        $statushow = pembayaran::where('id_pembeli', $id)->first();

        return view('konfirmasi', compact('statushow'));
    }



    
    public function deletechart($id){


        $model = chart::find($id);
        $model->delete();

        return redirect()->to('checkout/'.auth()->user()->id);
    }

    public function backchart($id){


        order::where('id_pembeli', $id)->delete();

        return redirect('product');
    }

}
