<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {   
        if (Auth()->Check()){
            return redirect()->route('home.index');
        } else {
            return view('auth.login');
        }
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        // var_dump($credentials);

        $authenticate = Auth::attempt($credentials);

        if(!$authenticate){
            return redirect()->route('login.index')->withErrors(['error'=>'Email or password invalid']);
        } 

        if($authenticate){
            return redirect()->route('home.index');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
