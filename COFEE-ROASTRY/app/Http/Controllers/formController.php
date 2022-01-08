<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Models\alamat;
use App\Models\tabeladmin;
use App\Models\adminAuth;

class formController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function registeradmin(){
        return view('adminregister');
    }

    public function loginadmin(){
        return view('adminlogin');
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

    public function daftaradmin(Request $request){
        
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'email' => ['required', 'email:dns'],
            'noHP' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        tabeladmin::create($validatedData);

        $request->session()->flash('loginSuccess', 'Berhasil registrasi! silakan login');

        return redirect('/login/admin');
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

    public function loginAuthadmin(Request $request){
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('webadmin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/product');
        }

        return back()->with('loginError', 'Login gagal, silakan coba lagi');
    }

}
