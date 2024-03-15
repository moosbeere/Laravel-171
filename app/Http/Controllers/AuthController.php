<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function signin(){
        return view('auth.registr');
    }

    function registr(Request $request){
        User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password' => $request->password,
        ]);
    }
}
