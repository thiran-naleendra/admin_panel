<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        // Retrieve select options from the configuration file
        $job_types = config('selectOptions.job_types');
        $soil_test = config('selectOptions.soil_test');
        $surveys = config('selectOptions.surveys');
        $feature_surveys = config('selectOptions.feature_surveys');
        $ahd_ffl = config('selectOptions.ahd_ffl');
        $other_jobs = config('selectOptions.other_jobs');
        return view('create_request', compact('job_types','soil_test','surveys','feature_surveys','ahd_ffl','other_jobs'));
    }
    public function view_request()
    {
        // Retrieve select options from the configuration file
        $job_types = config('selectOptions.job_types');
        $soil_test = config('selectOptions.soil_test');
        $surveys = config('selectOptions.surveys');
        $feature_surveys = config('selectOptions.feature_surveys');
        $ahd_ffl = config('selectOptions.ahd_ffl');
        $other_jobs = config('selectOptions.other_jobs');
        return view('view_request', compact('job_types','soil_test','surveys','feature_surveys','ahd_ffl','other_jobs'));
    }
}
