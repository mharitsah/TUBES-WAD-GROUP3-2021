<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\pembayaran;
use App\Models\alamat;
use App\Models\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

class adminController extends Controller
{
    
    public function adminproduct(){
        
        $datas = product::all();

        return view('adminproduct', compact('datas'));
    }

    public function adminadd(){
        

        return view('adminadd');
    }

    public function addproduct(Request $request){

        $foto_product = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('gambar_product'), $foto_product);
        $tambah = new product();

        $tambah->nama_barang = $request->nama_barang;
        $tambah->berat = $request->berat;
        $tambah->stok = $request->stok;
        $tambah->harga = $request->harga;
        $tambah->gambar = $foto_product;

        $tambah->save();
        
        return redirect('admin/product');
        
    }

    public function adminedit($id){
        
        $datas = product::where('id', $id)->first();

        return view('adminedit', compact('datas'));
    }

    public function editproduct(Request $request, $id){

        $foto_product = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('gambar_product'), $foto_product);
        
        product::where('id', $id)->update([
            'nama_barang' => $request->input('nama_barang'),
            'berat' => $request->input('berat'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga'),
            'gambar' => $foto_product
        ]);

        return redirect('admin/product');
    }

    public function hapusproduct($id){


        $model = product::find($id);
        $model->delete();

        return redirect('admin/product');
    }

    public function adminpesanan(){
        
        $datas = pembayaran::all();

        return view('adminpesanan', compact('datas'));
    }

    public function terimapesanan(Request $request, $id){
        
        pembayaran::where('id_pembayaran', $id)->update([
            'status' => $request->input('status')
        ]);

        return redirect('admin/pesanan');
    }

    public function tolakpesanan(Request $request, $id){
        
        pembayaran::where('id_pembayaran', $id)->update([
            'status' => $request->input('status')
        ]);

        return redirect('admin/pesanan');
    }

    public function bukticustomer($id, $id2){
        
        $pembayaran = pembayaran::where('id_pembayaran', $id2)->first();

        $alamat = alamat::where('id_pembeli', $id)->first();

        $customer = customer::where('id', $id)->first();

        return view('bukticustomer', compact('pembayaran', 'alamat', 'customer'));
    }

    


    

}

