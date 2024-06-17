<?php

namespace App\Http\Controllers;

use App\Models\RequestModel;
use Illuminate\Http\Request;

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
    public function view_request()
    {
        // Retrieve select options from the configuration file
        $request_types = config('selectOptions.request_types');
        $soil_test = config('selectOptions.soil_test');
        $surveys = config('selectOptions.surveys');
        $feature_surveys = config('selectOptions.feature_surveys');
        $ahd_ffl = config('selectOptions.ahd_ffl');
        $other_jobs = config('selectOptions.other_jobs');
        return view('view_request', compact('request_types', 'soil_test', 'surveys', 'feature_surveys', 'ahd_ffl', 'other_jobs'));
    }

    public function create_request(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'address' => 'required',
            'lot' => 'required',
            'suburb' => 'required',
            'postal_code' => 'nullable',
            'phone_no' => 'required',
            'name' => 'required',
            'job' => 'required',
            'soil_test' => 'required',
            'surveys' => 'required',
            'other_jobs' => 'required',
            'feature_surveys' => 'required',
            'customCheckbox1' => 'required',
            'ahd_ffl' => 'required',
            'footing_probe' => 'required',
            'wind_rating' => 'required',
            'bal' => 'required',
            'house_on_site' => 'required',
            'locked_gates' => 'required',
            'sub_un_con' => 'required',
            'description' => 'required',
            'reference' => 'required',
            'exampleInputFile' => 'required',
        ]);

        try {
            // Create a new request in the database
            RequestModel::create([
                'address' => $request->input('address'),
                'lot' => $request->input('lot'),
                'suburb' => $request->input('suburb'),
                'postal_code' => $request->input('postal_code'),
                'phone_no' => $request->input('phone_no'),
                'name' => $request->input('name'),
                'job' => $request->input('job'),
                'soil_test' => $request->input('soil_test'),
                'surveys' => $request->input('surveys'),
                'other_jobs' => $request->input('other_jobs'),
                'feature_surveys' => $request->input('feature_surveys'),
                'customCheckbox1' => $request->input('customCheckbox1'),
                'ahd_ffl' => $request->input('ahd_ffl'),
                'footing_probe' => $request->input('footing_probe'),
                'wind_rating' => $request->input('wind_rating'),
                'bal' => $request->input('bal'),
                'house_on_site' => $request->input('house_on_site'),
                'locked_gates' => $request->input('locked_gates'),
                'sub_un_con' => $request->input('sub_un_con'),
                'description' => $request->input('description'),
                'reference' => $request->input('reference'),
                'exampleInputFile' => $request->input('exampleInputFile'),
            ]);

            // Return back with success message
            return back()->with('success', 'Successfully registered user!');
        } catch (\Exception $e) {
            // Handle any errors that may occur during the creation process
            return back()->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }
    }
}
