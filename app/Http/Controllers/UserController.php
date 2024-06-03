<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function create_user(Request $request)
    {

        $request->validate([
            
            'name' => 'required',
            'position' => 'required',
            'mobile_no' => 'required',
            'email' => 'nullable',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'mobile_no' => $request->input('mobile_no'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return back()->with('success', 'Successfully registered user !');
    }
}
