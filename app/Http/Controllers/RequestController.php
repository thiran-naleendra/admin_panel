<?php

namespace App\Http\Controllers;

use App\Models\RequestModel;
use Illuminate\Http\Request;
use App\Models\Jobs;

class RequestController extends Controller
{
    public function index()
    {
        // Retrieve select options from the configuration file
        $request_types = config('selectOptions.request_types');
        $soil_test = config('selectOptions.soil_test');
        $surveys = config('selectOptions.surveys');
        $feature_surveys = config('selectOptions.feature_surveys');
        $ahd_ffl = config('selectOptions.ahd_ffl');
        $other_jobs = config('selectOptions.other_jobs');
        return view('create_request', compact('request_types', 'soil_test', 'surveys', 'feature_surveys', 'ahd_ffl', 'other_jobs'));
    }
    public function view_request($id)
    {
        // Retrieve select options from the configuration file
        $request_types = config('selectOptions.request_types');
        $soil_test = config('selectOptions.soil_test');
        $surveys = config('selectOptions.surveys');
        $feature_surveys = config('selectOptions.feature_surveys');
        $ahd_ffl = config('selectOptions.ahd_ffl');
        $other_jobs = config('selectOptions.other_jobs');
        $jobs = Jobs::find($id);
        return view('view_request', compact('request_types', 'soil_test', 'surveys', 'feature_surveys', 'ahd_ffl', 'other_jobs', 'jobs'));
    }

    public function create_request(Request $request) {
        // Validate the incoming request
        // $request->validate([
        //     'lot' => 'required',
        //     'street_no' => 'required',
        //     'street_name' => 'required',
        //     'suburb' => 'required',
        //     'postal_code' => 'nullable',
        //     'email' => 'required|email',
        //     'mobile_no' => 'required',
        //     'name' => 'required',
        //     'job' => 'required',
        //     'soil_test' => 'nullable',
        //     'surveys' => 'nullable',
        //     'other_jobs' => 'nullable',
        //     'feature_surveys' => 'nullable',
        //     'required_ahd' => 'nullable',
        //     'ahd_ffl' => 'nullable',
        //     'footing_probe' => 'nullable',
        //     'bal' => 'nullable',
        //     'wind_rating' => 'nullable',
        //     'locked_gates' => 'nullable',
        //     'house_on_site' => 'nullable',
        //     'sub_un_con' => 'nullable',
        //     'description' => 'nullable',
        //     'reference' => 'nullable',
        //     'file_input' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        // ]);
        
        $request->validate([
            // Other validation rules
            'footing_probe' => 'required|string|in:Y,N',
            'bal' => 'required|string|in:Y,N',
            'wind_rating' => 'required|string|in:Y,N',
            'locked_gates' => 'required|string|in:Y,N',
            'house_on_site' => 'required|string|in:Y,N',
            'sub_un_con' => 'required|string|in:Y,N',
        ]);
    
        // Retrieve the value of the radio button
        $footingProbe = $request->input('footing_probe');
        $bal = $request->input('bal');
        $windRating = $request->input('wind_rating');
        $lockedGates = $request->input('locked_gates');
        $houseOnSite = $request->input('house_on_site');
        $subUnCon = $request->input('sub_un_con');
        try {           
            $statuses = [
                'Ongoing' => 'Ongoing',
                'Confirmed' => 'Confirmed',
                'Hold' => 'Hold',
                'In-progress' => 'In-progress',
                'Completed' => 'Completed',
                // Add more options as needed
            ];
            // Create a new request in the database
            RequestModel::create([
                'lot' => $request->input('lot'),
                'street_no' => $request->input('street_no'),
                'street_name' => $request->input('street_name'),
                'suburb' => $request->input('suburb'),
                'postal_code' => $request->input('postal_code'),
                'email' => $request->input('email'),
                'mobile_no' => $request->input('mobile_no'),
                'name' => $request->input('name'),
                'job' => $request->input('job'),
                'soil_test' => $request->input('soil_test'),
                'surveys' => $request->input('surveys'),
                'other_jobs' => $request->input('other_jobs'),
                'feature_surveys' => $request->input('feature_surveys'),
                'required_ahd' => $request->input('required_ahd') ? 1 : 0,
                'ahd_ffl' => $request->input('ahd_ffl'),
                'footing_probe' => $footingProbe,
                'bal' => $bal,
                'wind_rating' => $windRating,
                'locked_gates' => $lockedGates,
                'house_on_site' => $houseOnSite,
                'sub_un_con' => $subUnCon,
                'description' => $request->input('description'),
                'reference' => $request->input('reference'),
                'status' => $statuses['Ongoing'],
                'file_input'=> $request->input('file_input'),
                'site_visit_date' => now()->startOfDay(),
                'report_due_date' => now()->addWeeks(2)->startOfDay(),
                // 'file_input' => $filePath,
            ]);

            // Return back with success message
            return back()->with('success', 'Request created successfully');
        } catch (\Exception $e) {
            // Handle any errors that may occur during the creation process
            return back()->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }
    }

}
