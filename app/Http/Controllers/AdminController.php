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
    // $request->validate([
    //     'description' => 'required',
    //     'job_type' => 'required',
    //     'job_category' => 'required',
    //     'reference' => 'required',
    //     'visit_date' => 'required|date',
    //     'line1' => 'required',
    //     'line2' => 'required',
    //     'suburb' => 'required',
    //     'postal_code' => 'required',
    //     'email' => 'required|email',
    //     'mobile_no' => 'required',
    //     'name' => 'required',
    //     // Add other validation rules as needed
    // ]);

    $job = Jobs::findOrFail($id);

    // // Handle file upload
    // if ($request->hasFile('file_input')) {
    //     $file = $request->file('file_input');
    //     $path = $file->store('public/uploads'); // Store the file and get the path
    //     $job->image = basename($path); // Save the filename in the database
    // }

    // Update job details
    // $job->job_type = $request->input('job_type');
    // $job->job_category = $request->input('job_category');
    $job->reference = $request->input('reference');
    $job->description = $request->input('description');
    // $job->visit_date = $request->input('visit_date');
    // $job->line1 = $request->input('line1');
    // $job->line2 = $request->input('line2');
    $job->suburb = $request->input('suburb');
    $job->postal_code = $request->input('postal_code');
    $job->email = $request->input('email');
    $job->mobile_no = $request->input('mobile_no');
    $job->name = $request->input('name');

    // // Update additional information
    // $job->footing_probe = $request->input('footing_probe', 'N');
    // $job->wind_rating = $request->input('wind_rating', 'N');
    // $job->bal = $request->input('bal', 'N');
    // $job->house_on_site = $request->input('house_on_site', 'N');
    // $job->locked_gates = $request->input('locked_gates', 'N');
    // $job->sub_un_con = $request->input('sub_un_con', 'N');
    // $job->status = $request->input('status');

    $job->save();

    return back()->with('success', 'Successfully Update!');
}
}
