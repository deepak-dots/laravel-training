<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Hash;


class HomeController extends Controller
{
    public function index(){
        return view('admin/pages/dashboard');
    }

    public function adminLogin(){
        // $data = Hash::make('123456789');

// dd($data);
        return view('admin/login');
    }
    public function checkLogin(Request $request)
    {
        // dd($request->all());
        $credentials = ([
            'email' => $request->username,
            'password' => $request->password
        ]);
        // dd($credentials);

        if(Auth::guard('admin')->attempt($credentials))
        {
            //dd('dasdas');
            //$request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }
        
        else{
            //dd('aaaaa');
            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
        }

        }

    public function addUser(){
        return view('admin/user/add-user');
    }

    public function userList(){
        return view('admin/user/user-list');
    }

    public function contact(){
        return view('admin/pages/contact');
    }


}


    

