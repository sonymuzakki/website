<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){

        return view('login.login');
    }

    public function loginproses(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }

        return redirect('dashboard')->with('success','Data Berhasil di ditambahkan');
    }

    public function register (Request $request){

        return view('login.register');
    }

    public function registeruser (Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');

    }
}