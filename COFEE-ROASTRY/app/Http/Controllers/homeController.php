<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function home(){

        $datas = product::all();

        return view('home', compact('datas'));
    }

    
    

    public function order(){
        return view('order');
    }

    public function cari(){

        // $posts = homeController::latest();

        // if(request('search')) {
        //     $posts->where('like', '%' . request('search') . '%');
        // }
    }






    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }




    public function testing($id){

        $testdata = order::where('id_pembeli', $id)->get();

        $statushow = pembayaran::where('id_pembeli', $id)->first();

        return view('testing', compact('testdata', 'statushow'));

    }
}


    