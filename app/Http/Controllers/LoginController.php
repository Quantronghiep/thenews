<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function check_sign_in(Request $request)
    {
        $remember = true;
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
        return view('login.sign_in');
    }

    public function sign_up()
    {
        return view('login.sign_up');
    }

    public function check_sign_up(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 0,
        ]);
        $success = 'Dang ki thanh cong';
//        event(new Registered($user));
        Auth::login($user);


        return redirect('/sign_in')->with('success', $success);
    }

    public function log_out()
    {
        Auth::logout();
        return view('login.sign_in');
    }
}
