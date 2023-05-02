<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    public function checkAuth(Request $request)
    {
        $credentials = ([
            'username' => request('email_id'),
            'password' => request('password')
        ]);

        if(Auth::attempt($credentials))
        {
            dd('dasdas');
            //$request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }
        
        else{
            dd('aaaaa');
            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
        }
        
    }  
}
