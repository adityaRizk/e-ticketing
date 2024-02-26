<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/admin');

            }if(Auth::user()->role == 'petugas'){
                return redirect()->intended('/petugas');

            }if(Auth::user()->role == 'penumpang'){
                return redirect()->intended('/penumpang');

            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'nama_lengkap' => ['required'],
            'password' => ['required'],
        ]);

        $credentials['role'] = 'penumpang';
        $credentials['password'] = bcrypt($credentials['password']);
        // dd($credentials);
        User::create($credentials);

        return redirect('/login')->with('success', 'Akun Berhasil di buat silahkan login');
    }

}
