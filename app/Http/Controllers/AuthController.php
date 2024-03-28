<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        // Hash the password
        $hashedPassword = Hash::make($request->password);

        // Create a new user instance and fill it with the form data
        $employee = new User();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $hashedPassword;

        // Save the user record to the database
        $employee->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Employee registered successfully!');
    }


    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->usertype === 'admin') {
                // Redirect admin users to the admin dashboard
                return view('dashboard');
            } elseif ($user->usertype === 'user') {
                // Redirect regular users to their dashboard
                return view('user_dashboard');
            } else {
                // Handle other user types or scenarios here
                return redirect()->intended('/');
            }
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to desired page after logout
    }

}
