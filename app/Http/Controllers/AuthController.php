<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPOST(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user-> email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials))
        {
            return redirect('/home')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password wrong');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
