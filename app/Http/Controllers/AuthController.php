<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function loginView()
    {
        if (Auth::check()) {
            return redirect('/profile');
        }
        return view('login');
    }

    function login(Request $request)
    {
        $request->only([
            'email',
            'password',
        ]);

        $request->validate([
            'email' => 'required|email:rfc,dns|',
            'password' => 'required|min:8|max:64',
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    function registerView()
    {
        if (Auth::check()) {
            return redirect('/profile');
        }
        return view('register');
    }

    function register(Request $request)
    {
        $request->only([
            'email',
            'password',
            'first_name',
            'last_name',
        ]);

        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8|max:64',
            'first_name' => 'required|min:3|max:64',
            'last_name' => 'required|min:3|max:64',
        ]);

        $request->password = bcrypt($request->password);

        User::create($request->all());

        return redirect('/login')->with('success', 'You have successfully registered!');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
