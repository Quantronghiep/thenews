<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

//use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    public function check_sign_in(Request $request)
    {
        $remember = (bool)$request->remember;
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password,
            'role' => 1,
//            $remember,
        ], $remember)) {
            return redirect()->route('admin.index');
        }
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password,
            'role' => 0,
        ], $remember)) {
            return redirect()->route('home');
        }

        return redirect()->route('sign_in')->with('error', 'FAILED LOGIN');
    }

    public function sign_in()
    {
        if (auth()->check()) {
            return redirect('/');
        }
        return view('login.sign_in');
    }

    public function sign_up()
    {
        return view('login.sign_up');
    }

    public function check_sign_up(UserCreateRequest $request)
    {
//        dd($request);
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 0,
        ]);

        event(new Registered($user));
        // luu lai nguoi dang nhap
        Auth::attempt(['email' => $request->email,
            'password' => $request->password,
        ]);
        $success = 'Đăng kí thành công, kiểm tra email để xác thực tài khoản';

        return redirect('/')->with('success', $success);

    }


    public function log_out()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
