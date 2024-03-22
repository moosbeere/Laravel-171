<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    function signin(){
        return view('auth.signin');
    }

    function registr(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:App\Models\User|email',
            'password'=>'required|min:6'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        $user->createToken('MyAppTokens');
        return redirect()->route('login');
    }

    function login(){
        return view('auth.signup');
    }

    function signup(Request $request){
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required|min:6'
        ]);
        
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/article');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    function logout(Request $request){
        $session = $request->session()->all();
        Log::warning($session);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $session2 = $request->session()->all();
        Log::warning($session2);
        return redirect('/');
    }
}
