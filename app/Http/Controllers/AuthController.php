<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAuthForm()
    {
        return view('pages.auth');
    }

    public function loginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('home')->with('success', 'Signup successful! Please login.');
    }
}
