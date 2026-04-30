<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function daftar()
    {
        return view('daftar')
    }

}
