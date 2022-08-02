<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if (auth()->user()->role == 1) {
            $users = User::all();
            return view('admin.users.index', [
                'users' => $users,
            ]);
        } else {
            return redirect('sign_in');
        }

    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $request->validated();
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return redirect('/admin');
    }


    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show')->with('user', $user);
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request['password']),
                'role' => $request['role'],
            ]);
        return redirect('/admin');
    }


    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin');
    }
}
