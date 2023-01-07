<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getLogin() {
        return view('Backend.Admin.login');
    }

    public function postLogin(Request $req) {
        $val = $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu tối thiếu 6 kí tự'
            ]
        );

        if (Auth::attempt(['email' => $val['email'], 'password' => $val['password']])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('loginAdmin')->with('notify',',Sai email hoặc mật khẩu, vui lòng thử lại');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('loginAdmin');
    }

    public function dashboard() {
        $countBill = Bill::all()->count();
        $revenue = Bill::all()->sum('total');
        $countProduct = Product::all()->count();
        $countUser = User::where('level', '=', 1 )->count();
        // echo $countBill.'-';
        // echo $countProduct.'-';
        // echo $countUser.'-';
        // echo Bill::all()->sum('total');
        // dd(1);
        return view('Backend.Admin.dashboard',compact('countBill', 'countProduct', 'countUser', 'revenue'));
    }

    public function changePassword(Request $req, ) {
        $val = $req->validate(
            [
                'oldPwd' => 'required',
                'newPwd' => 'required',
                'reNewPwd' => 'required|same:newPwd',
            ],
            [
                'oldPwd.required' => 'Vui lòng nhập mật khẩu cũ',
                'newPwd.required' => 'Vui lòng nhập mật khẩu mới',
                'reNewPwd.required' => 'Vui lòng nhập mật khẩu',
                'reNewPwd.same' => 'Mật khẩu mới không khớp',
            ]
        );
        if ($val['newPwd'] != $val['reNewPwd']) {
            return redirect('dashboard')->with('error', 'Mật khẩu mới nhập không khớp');
        } 
        if (!Hash::check($val['oldPwd'], Auth::user()->password)) {
            return redirect()->route('dashboard')->with('error', 'Mật khẩu cũ bị sai');
        } else {
            $req->user()->fill(['password' => Hash::make($val['newPwd'])])->save();
            return redirect()->route('dashboard')->with('success', 'Cập nhật thành công');
        }
        
    }
}
