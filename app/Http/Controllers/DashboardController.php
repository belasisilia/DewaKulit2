<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('isAuth');
    }

    function index()
    {
        return view('profile', [
            'user' => auth()->user(),
        ]);
    }
}
