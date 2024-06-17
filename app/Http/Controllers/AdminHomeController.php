<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {   
        $statuses = [
            '' => 'All Status',
            'Ongoing' => 'Ongoing',
            'Confirmed' => 'Confirmed',
            'Hold' => 'Hold',
            'In-progress' => 'In-progress',
            'Completed' => 'Completed',
            // Add more options as needed
        ];
        $jobs = Jobs::get();
        return view('admin.admin_home', compact('statuses'))->with(['jobs'=>$jobs]);
    }
    
    
    
}
