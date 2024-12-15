<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show the authentication form (signup/login page)
    public function showAuthForm()
    {
        return view('pages.auth'); // Displays the auth page
    }

    // Show the login form
    public function loginForm()
    {
        return view('pages.login'); // Displays the login page
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Add validation logic for login credentials
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Authentication logic here
        if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // If authentication fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}