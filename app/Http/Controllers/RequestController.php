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

    // public function create_request(Request $request) {
        
        
    //     $request->validate([
    //         // Other validation rules
    //         'footing_probe' => 'required|string|in:Y,N',
    //         'bal' => 'required|string|in:Y,N',
    //         'wind_rating' => 'required|string|in:Y,N',
    //         'locked_gates' => 'required|string|in:Y,N',
    //         'house_on_site' => 'required|string|in:Y,N',
    //         'sub_un_con' => 'required|string|in:Y,N',
    //     ]);
    
    //     // Retrieve the value of the radio button
    //     $footingProbe = $request->input('footing_probe');
    //     $bal = $request->input('bal');
    //     $windRating = $request->input('wind_rating');
    //     $lockedGates = $request->input('locked_gates');
    //     $houseOnSite = $request->input('house_on_site');
    //     $subUnCon = $request->input('sub_un_con');
    //     try {           
    //         $statuses = [
    //             'Ongoing' => 'Ongoing',
    //             'Confirmed' => 'Confirmed',
    //             'Hold' => 'Hold',
    //             'In-progress' => 'In-progress',
    //             'Completed' => 'Completed',
    //             // Add more options as needed
    //         ];
    //         // Create a new request in the database
    //         RequestModel::create([
    //             'lot' => $request->input('lot'),
    //             'street_no' => $request->input('street_no'),
    //             'street_name' => $request->input('street_name'),
    //             'suburb' => $request->input('suburb'),
    //             'postal_code' => $request->input('postal_code'),
    //             'email' => $request->input('email'),
    //             'mobile_no' => $request->input('mobile_no'),
    //             'name' => $request->input('name'),
    //             'job' => $request->input('job'),
    //             'soil_test' => $request->input('soil_test'),
    //             'surveys' => $request->input('surveys'),
    //             'other_jobs' => $request->input('other_jobs'),
    //             'feature_surveys' => $request->input('feature_surveys'),
    //             'required_ahd' => $request->input('required_ahd') ? 1 : 0,
    //             'ahd_ffl' => $request->input('ahd_ffl'),
    //             'footing_probe' => $footingProbe,
    //             'bal' => $bal,
    //             'wind_rating' => $windRating,
    //             'locked_gates' => $lockedGates,
    //             'house_on_site' => $houseOnSite,
    //             'sub_un_con' => $subUnCon,
    //             'description' => $request->input('description'),
    //             'reference' => $request->input('reference'),
    //             'status' => $statuses['Ongoing'],
    //             'file_input'=> $request->input('file_input'),
    //             'site_visit_date' => now()->startOfDay(),
    //             'report_due_date' => now()->addWeeks(2)->startOfDay(),
    //             // 'file_input' => $filePath,
    //         ]);

    //         // Return back with success message
    //         return back()->with('success', 'Request created successfully');
    //     } catch (\Exception $e) {
    //         // Handle any errors that may occur during the creation process
    //         return back()->with('error', 'There was an error processing your request: ' . $e->getMessage());
    //     }
    // }
    public function create_request(Request $request) {
        // $request->validate([
        //     'lot' => 'required|string|max:255',
        //     'street_no' => 'required|string|max:255',
        //     'street_name' => 'required|string|max:255',
        //     'suburb' => 'required|string|max:255',
        //     'postal_code' => 'required|string|max:10',
        //     'email' => 'required|email|max:255',
        //     'mobile_no' => 'required|string|max:20',
        //     'name' => 'required|string|max:255',
        //     'job' => 'required|string',
        //     'soil_test' => 'nullable|string',
        //     'surveys' => 'nullable|string',
        //     'other_jobs' => 'nullable|string',
        //     'feature_surveys' => 'nullable|string',
        //     'required_ahd' => 'boolean',
        //     'ahd_ffl' => 'nullable|string',
        //     'footing_probe' => 'required|string|in:Y,N',
        //     'bal' => 'required|string|in:Y,N',
        //     'wind_rating' => 'required|string|in:Y,N',
        //     'locked_gates' => 'required|string|in:Y,N',
        //     'house_on_site' => 'required|string|in:Y,N',
        //     'sub_un_con' => 'required|string|in:Y,N',
        //     'description' => 'nullable|string',
        //     'reference' => 'nullable|string|max:255',
        //     'file_input' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        // ]);
    
        try {
            // Handle file upload
            $filePath = null;
            if ($request->hasFile('file_input')) {
                $file = $request->file('file_input');
                $filePath = $file->store('uploads', 'public');
            }
    
            // Convert 'Y'/'N' to boolean (1/0)
            $footing_probe = $request->input('footing_probe') === 'Y' ? 1 : 0;
            $bal = $request->input('bal') === 'Y' ? 1 : 0;
            $wind_rating = $request->input('wind_rating') === 'Y' ? 1 : 0;
            $locked_gates = $request->input('locked_gates') === 'Y' ? 1 : 0;
            $house_on_site = $request->input('house_on_site') === 'Y' ? 1 : 0;
            $sub_un_con = $request->input('sub_un_con') === 'Y' ? 1 : 0;
    
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
                'footing_probe' => $footing_probe,
                'bal' => $bal,
                'wind_rating' => $wind_rating,
                'locked_gates' => $locked_gates,
                'house_on_site' => $house_on_site,
                'sub_un_con' => $sub_un_con,
                'description' => $request->input('description'),
                'reference' => $request->input('reference'),
                'status' => 'Ongoing', // default status
                'file_input' => $filePath,
                'site_visit_date' => now()->startOfDay(),
                'report_due_date' => now()->addWeeks(2)->startOfDay(),
            ]);
    
            // Return back with success message
            return back()->with('success', 'Request created successfully');
        } catch (\Exception $e) {
            // Handle any errors that may occur during the creation process
            return back()->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }
    }
    
    

}
