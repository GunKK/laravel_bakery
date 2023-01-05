<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function checkout() {
        if (Session::has('cart')) {
            return view('Frontend.Pages.checkout');
        } else {
            return view('Frontend.Pages.shopping_cart');
        }
    }

    public function getLogin() 
    {
        return view('Frontend.Pages.login');
    }

    public function postLogin(Request $req) {
        $val = $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ],
            [
                'email.required' => 'Email không được bỏ trống',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Password không được bỏ trống ',
                'password.min' => 'Password must be at least 6 characters',
            ]
        );

        // $email = $val['email'];
        // $password = $val['password'];
        if (Auth::attempt(['email' => $val['email'], 'password' => $val['password']])) {
            if (Session::has('cart')) {
                return redirect()->route('checkout');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Sai email hoặc mật khẩu');
        }
    }

    public function getSignUp() 
    {
        return view('Frontend.Pages.signup');
    }

    public function postSignUp(Request $req) {
        $val = $req->validate(
            [
                'email' => 'required|email|unique:customer',
                'name'=> 'required',
                'password' => 'required|min:6',
                'rePassword' => 'required|same:password',
                // 'phone'=> 'required|regex:/^[0]\+84\d{9}$/',
                'phone' => 'required'

            ],
            [
                'email.required' => 'Email không được bỏ trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã tồn tại',
                'name'  => 'Vui lòng nhập tên của bạn',
                'password.required' => 'Password không được bỏ trống    ',
                'password.min' => 'Password must be at least 6 characters',
                'repassword.required' => 'Vui lòng nhập mật khẩu',
                'repassword.same' => 'Mật khẩu không khớp',
                'phone.required' => 'số điện thoại không đúng định dạng',
                // 'phone.regex' => 'Must be a valid phone number',
            ]
        );

        $user = new Customer();
        $user->email = $val['email'];
        $user->name = $val['name'];
        $user->phone = $val['phone'];
        $user->password = bcrypt($val['password']);
        $user->address = $req->address;
        $user->save();
        return redirect()->route('login')->with('success', 'Đăng kí thành công, vui lòng đăng nhập lại !');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
