<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addChart;
use App\Models\buyChart;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function product(){
        return view('product');
    }

    public function checkout(){
        return view('checkout');
    }

    public function order(){
        return view('order');
    }

    public function status(){
        return view('status');
    }
}
