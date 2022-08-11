<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function signin()
    {
        return view('user.signin');
    }

    public function signup()
    {
        return view('user.signup');
    }
}
