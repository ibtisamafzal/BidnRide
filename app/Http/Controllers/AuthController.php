<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showAuthForm()
    {
        return view('pages.signup');
    }

    public function loginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        // Handle login logic here
    }



    // Add the register method
    public function register(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the user
        User::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Redirect to login page with a success message
        return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
    }
}


// <!-- namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use App\Models\User;

// class AuthController extends Controller
// {
//     public function login()
//     {
//         return view('auth.login'); // Adjust this as needed
//     }
//     // Show the authentication form
//     public function showAuthForm()
//     {
//         return view('auth');
//     }

//     // Handle login
//     public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|min:6',
//         ]);

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
//             return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
//         }

//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }

//     // Handle signup
//     public function signup(Request $request)
//     {
//         $request->validate([
//             'username' => 'required|min:3|max:50',
//             'email' => 'required|email|unique:users,email',
//             'password' => 'required|min:6|confirmed',
//         ]);

//         User::create([
//             'name' => $request->username,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//         ]);

//         return redirect()->route('auth')->with('success', 'Signup successful! Please log in.');
//     }
// } -->
