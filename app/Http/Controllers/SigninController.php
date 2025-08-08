<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Your User model
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup'); // Your signup form view
    }

    public function signup(Request $request)
    {
        // Validate inputs
        $request->validate([
            'email' => 'required|email|unique:users,email',  // Make sure email unique
            'password' => 'required|min:6|confirmed', // password_confirmation input needed
        ]);

        // Create and save new user
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Always hash passwords!
        $user->save();

        // Redirect after successful registration
        return redirect('/signin')->with('success', 'Registration successful! Please login.');
    }
}
