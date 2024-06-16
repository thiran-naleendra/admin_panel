<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {   
        $jobs = Jobs::get();
        return view('admin.admin_home')->with(['jobs'=>$jobs]);
    }
    
    
    
}
