<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Move this line here
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function admin_signup()
    {   
        // return view('genaral');
        return view('admin.admin_signup');
    }
    

    public function admin_login(Request $request)
    {
        $credentials = $request->only('name', 'password');



        if (Auth::attempt($credentials)) {
            // Authentication passed...


            return redirect()->intended('/admin_home');
        }

        return back()->withErrors(['name' => 'Invalid credentials']);
    }
    public function admin_logout()
    {
        Auth::logout(); // Log the user out

        return redirect('/landing'); // Redirect to the login page or any other desired page
    }

    public function admin_view_request()
    {
        return view('admin.admin_view_request');
    }
}
