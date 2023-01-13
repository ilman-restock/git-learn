<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function dsadasd()
    {
        return 'ini bakal konflik';
    }
}
