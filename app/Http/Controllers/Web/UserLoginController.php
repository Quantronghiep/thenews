<?php

namespace App\Http\Controllers\Web;

use App\Models\User;

class UserLoginController
{
    public function profile($id)
    {
        $user = User::find($id);
        return view('user.profile')->with('user', $user);
    }

}
