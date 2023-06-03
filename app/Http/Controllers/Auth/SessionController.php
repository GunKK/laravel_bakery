<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() 
    {
        return view('auth.login');
    }

    public function store(Request $request) 
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|string|email|max:255|ends_with:gmail.com',
            'password' => ['required'],
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return 
                Auth::user()->role == 0 
                ? redirect()->route('dashboard')->with('success', 'Đăng nhập thành công') 
                : redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } else {
            return redirect()->route('login')->with('error', 'Email hoặc mật khẩu không khớp');
        }
    }

    public function destroy() 
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
