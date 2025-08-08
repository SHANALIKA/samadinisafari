<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the signin form page
    public function showLoginForm()
    {
        return view('signin'); // resources/views/signin.blade.php
    }

    // Handle login post request
    public function login(Request $request)
    {
        // Validate email and password fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Get credentials from form input
        $credentials = $request->only('email', 'password');

        // Check if 'remember me' checkbox is ticked
        $remember = $request->has('remember');

        // Attempt login using Auth facade
        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session ID for security
            $request->session()->regenerate();

            // Redirect to booking page after successful login
            return redirect()->intended('booking')->with('success', 'Logged in successfully!');
        }

        // Login failed: send back with error message & input retention
        return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/signin');
    }
}
