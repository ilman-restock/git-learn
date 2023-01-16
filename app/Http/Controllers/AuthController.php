<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function auth(Request $r)
    {
        $login = [
            'email' => $r->email,
            'password' => $r->password
        ];
      
        if (auth()->attempt($login)) {
            return redirect()->route('dashboard');
        }
        
        return redirect()->route('admin.auth')->with(['error' => 'Email/Password salah!']);
    }

    public function Registrasi()
    {
        return 'ini bakal konflik';
    }

    public function Aktivasi()
    {
        return "Aktivasi";
    }
    
    public function ForgotPassword()
    {
        
    }
}
