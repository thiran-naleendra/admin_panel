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
        //     'phone_no' => 'required',
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
                'phone_no' => $request->input('phone_no'),
                'name' => $request->input('name'),
                'job' => $request->input('job'),
                'soil_test' => $request->input('soil_test'),
                'surveys' => $request->input('surveys'),
                'other_jobs' => $request->input('other_jobs'),
                'feature_surveys' => $request->input('feature_surveys'),
                'required_ahd' => $request->input('required_ahd'),
                'ahd_ffl' => $request->input('ahd_ffl'),
                'footing_probe' => $request->input('footing_probe'),
                'bal' => $request->input('bal'),
                'wind_rating' => $request->input('wind_rating'),
                'locked_gates' => $request->input('locked_gates'),
                'house_on_site' => $request->input('house_on_site'),
                'sub_un_con' => $request->input('sub_un_con'),
                'description' => $request->input('description'),
                'reference' => $request->input('reference'),
                'status' => $statuses['Ongoing'],
                'image'=> 'imgSrc',
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
