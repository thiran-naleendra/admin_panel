<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminEmployeeController extends Controller
{
    public function index()
    {   
        $employee = Employee::get();
        return view('admin.admin_create_employee')->with(['employee'=>$employee]);
    }

    public function create_employee(Request $request)
{
    try {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'mobile_no' => 'required',
            'email' => 'nullable|email',
            'password' => 'required',
        ]);

        Employee::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'mobile_no' => $request->input('mobile_no'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return back()->with('success', 'Successfully registered Employee!');
    } catch (\Exception $e) {
       
        // Return back with an error message
        return back()->with('error', 'There was a problem create Employee: ' . $e->getMessage());
    }
}

}
