<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login() {
        return view('login.index');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('/dashboard');
            }
            elseif (auth()->user()->role_id === 2) {
                // jika user admin
                return redirect()->intended('/admin');
            }
            elseif (auth()->user()->role_id === 3) {
                // jika user manager
                return redirect()->intended('/manager');
            }
            elseif (auth()->user()->role_id === 4) {
                // jika user marketing
                return redirect()->intended('/marketing');
            }
            else {
                // jika user pegawai
                return redirect()->intended('/support');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'rungkad');
    }

     public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
