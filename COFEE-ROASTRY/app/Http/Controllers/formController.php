<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $request->session()->flash('loginSuccess', 'Berhasil registrasi! silakan login');

        return redirect('/login');
    }

    public function loginAuth(Request $request){
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/aboutus');
        }

        return back()->with('loginError', 'Login gagal, silakan coba lagi');
    }

}
