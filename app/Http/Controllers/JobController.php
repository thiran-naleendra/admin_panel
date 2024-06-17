<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {   
        $jobs = Jobs::get();
        return view('jobs')->with(['jobs'=>$jobs]);
    }
}
