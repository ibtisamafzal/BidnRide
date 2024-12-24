<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signup()
    {
        return view('pages.signup'); // Signup page
    }

    public function login()
    {
        return view('pages.login'); // Correct path to the login view
    }
    public function auctions()
    {
        return view('pages.auctions'); // Auctions page
    }

    public function faq()
    {
        return view('pages.faq'); // FAQ page
    }

    public function about()
    {
        return view('pages.about'); // About page
    }

    public function team()
    {
        return view('pages.team'); // Team page
    }
}

