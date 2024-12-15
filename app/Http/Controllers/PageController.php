<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signup()
    {
        return view('pages.signup'); // Correct path to the signup view
    }

    public function login()
    {
        return view('pages.login'); // Correct path to the login view
    }
}
