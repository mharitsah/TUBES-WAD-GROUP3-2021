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
}
