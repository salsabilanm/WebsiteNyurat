<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'sekretaris') {
                return redirect()->intended('sekre-home');
            } elseif ($user->role == 'user') {
                return redirect()->intended('home');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'nim' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('nim','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'sekretaris') {
                    return redirect()->intended('sekre-home');
                } elseif ($user->role == 'user') {
                    return redirect()->intended('home');
                }
                return redirect()->intended('/');
            }

        return redirect('/')
                ->withInput()
                ->withErrors(['login_gagal' => 'Maaf, NIM atau Password Anda Salah. Harap Masukkan Kembali ']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}