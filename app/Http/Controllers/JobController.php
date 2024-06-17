<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
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
        return view('jobs', compact('statuses'))->with(['jobs'=>$jobs]);
    }
}
