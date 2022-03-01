<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = $request->only('name', 'email', 'password', 'phone');
        $user["password"] = Hash::make($user["password"]);
        DB::table('users')->insert($user);
        return redirect()->route('login');
    }

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //laravel hỗ trợ đặng nhập
        $user = $request->only('email', 'password');
        //dùng attemp để check user có hay ko
        if (Auth::attempt($user)) {
//            dd('đăng nhập thành công');
            return redirect()->route('products.index');
        }else{
            Session::flash('msg','Tài khoản không đúng');
//            dd('đăng nhập ko thành công');
            return  redirect()->back();
        }
    }
}
