<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    // for the / route, must redirect to home or login page if auth or not.
    public function index ()
    {
        if (Auth::check()) 
        {
            return redirect(route('toHome'));
        } else 
        {
            return redirect(route('toLogin'));
        }
    }

    //serves the login page
    public function toLogin()
    {
        if (Auth::check()) 
        {
            return redirect(route('toHome'));
        }
        return view('login');
    }

    //serves the register page
    public function toRegister ()
    {
        if (Auth::check()) 
        {
            return redirect(route('toHome'));
        }
        return view('register');
    }

    //register the home/main page, also checks if not logged in
    public function toHome () 
    {
        if (!Auth::check()) {
            return redirect(route('toLogin'));
        }
        return view('home');
    }

}
