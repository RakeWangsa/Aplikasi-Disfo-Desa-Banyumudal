<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(request $request)
    {
        $email = $request->session()->get('email');
        if($email!=NULL){
            return redirect()->route('admin');
        }
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }
    public function checkLogin(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan login
        if (Auth::attempt($credentials)) {
            $request->session()->put('email', Auth::user()->email);
            // Jika berhasil, arahkan ke halaman dashboard atau halaman yang diinginkan
            return redirect()->route('admin');
        }

        // Jika gagal, kembali ke formulir login dengan pesan error
        return back()->withErrors([
            'email' => 'Login gagal, silahkan coba lagi!',
        ]);
    }
    public function logout()
    {
        session()->forget('email');
        Auth::logout();
        return redirect()->route('login');
    }
}
