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
            // Authentication successful
            return redirect()->intended('/admin');
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
