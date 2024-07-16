<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserAuth extends Controller
{

    //login
    public function login(Request $request)
    {

        //validation
        $userdata = $request->validate([
            'email' => ['required', 'max:255'],
            'username' => ['required',],
            'password' => ['required',],
            'name' => ['required',],
        ]);

        //action
        if (Auth::attempt($userdata, $request->remember,)) {
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'failed' => 'Wrong Password or Email',
            ]);
        }
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');


    }

    //Registration
    public function register(Request $request){

        //validation
        $userdata = $request->validate([
            'email' => ['required', 'max:255','email' , 'unique:users'],
            'username' => ['required', 'max:255' ],
            'password' => ['required', 'min:12', 'confirmed'],
            'name' => ['required', 'max:255'],
        ]);

        User::create($userdata);

        return redirect('/') ;


    }
    public function logout(){
    }
}
