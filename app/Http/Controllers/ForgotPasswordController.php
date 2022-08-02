<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class ForgotPasswordController extends Controller
{

    public function showForgetPasswordForm()
    {
        return view('login.forgetPassword');
    }


    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $action_link = route('reset.password.get', [
            'token' => $token,
            'email' => $request->email,
        ]);
        Mail::send('login.emailForgetPassword', ['action_link' => $action_link], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link! ' . $request->email);
    }


    public function showResetPasswordForm($token, Request $request)
    {
        return view('login.forgetPasswordLink', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/sign_in')->with('success', 'Your password has been changed!');
    }
}
