<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->level == 0) {
                return $next($request);
            } else {
                return redirect()->route('loginAdmin')->with('notify','Sai email hoặc mật khẩu, vui lòng thử lại');
            }
        } else {
            return redirect()->route('loginAdmin')->with('notify','Vui lòng đăng nhập');
        }
    }
}
