<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function signup()
    {
        return view('pages.signup');
    }

    public function login()
    {
        return view('pages.login');
    }
    public function auctions()
    {
        return view('pages.auctions'); // Auctions page
    }

    public function show()
    {
        return view('pages.product2');
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

