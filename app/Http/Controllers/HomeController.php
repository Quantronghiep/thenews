<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function detail()
    {
        return view('user.detail');
    }

    public function list()
    {
        return view('user.list');
    }
}
