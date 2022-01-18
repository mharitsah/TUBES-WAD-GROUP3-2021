<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class homeController extends Controller
{
    public function aboutus(){

        return view('aboutus');
    }

    public function cekresi(Request $request){

        $client = new Client();
        $response = $client->request('GET', 'https://merchant-api-sandbox.shipper.id/v3/order/'.$request->resi, [
            'headers' => [
              'Accept' => 'application/json',
              'X-API-Key' => 'TXhl2k9M7cLZmTmMN7TFU8yqsWBTdTeAOpqtdMFQMLCCR659RiJIsqcKuDMdjHcp',
            ],
        ]);

        $json = $response->getBody();
        $datas = json_decode($json, true);

        return view('cekresi', compact('datas'));
    }

    public function contactus(){

        return view('contactus');
    }

    public function home(){

        $datas = product::all();

        return view('home', compact('datas'));
    }

    public function gallery(){

        $datas = product::all();

        return view('gallery', compact('datas'));
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

        return redirect('/aboutus');
    }




    public function testing($id){

        $client = new Client();
        $response = $client->request('GET', 'https://merchant-api-sandbox.shipper.id/v3/order/'.$id, [
            'headers' => [
              'Accept' => 'application/json',
              'X-API-Key' => 'TXhl2k9M7cLZmTmMN7TFU8yqsWBTdTeAOpqtdMFQMLCCR659RiJIsqcKuDMdjHcp',
            ],
        ]);

        $json = $response->getBody();
        $datas = json_decode($json, true);

        return view('testing', compact('datas'));

    }
}


    