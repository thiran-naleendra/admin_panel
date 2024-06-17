<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\User;
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
        $user = User::get();
        return view('admin.admin_signup')->with(['user'=>$user]);
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

    public function admin_view_request($id)
    {   
        $jobs = Jobs::find($id);
        return view('admin.admin_view_request', compact('jobs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'description' => 'required',
            
            // Add other validation rules as needed
        ]);

        $job = Jobs::findOrFail($id);
        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully');
    }
}
