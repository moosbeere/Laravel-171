<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function signin(){
        return view('auth.registr');
    }
}
