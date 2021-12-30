<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class formController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function daftar(Request $request){
        
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'email' => ['required', 'email:dns'],
            'noHP' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        customer::create($validatedData);

        return redirect('/login');
    }
}
