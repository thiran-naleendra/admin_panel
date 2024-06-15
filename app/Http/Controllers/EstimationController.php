<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estimation;

class EstimationController extends Controller
{
    public function index()
    {
        return view('estimation');
    }

    public function save_estimation(Request $request)
    {
        try {
            // Attempt to create the estimation
            $estimation = Estimation::create(
                [
                    'first_name' => $request->input('first_name'),
                    'last_name' => $request->input('last_name'),
                    'email' => $request->input('email'),
                    'job_id' => $request->input('job_type'),
                    'location' => $request->input('location'),
                    'message' => $request->input('message'),
                    'image' => 'imgSrc',
                    'created_by' => 'User',
                ]
            );

            // If successful, return with success message
            return back()->with('success', 'Successfully placed Estimate!');
        } catch (\Exception $e) {
            // If there was an error, return with an error message
            return back()->with('error', 'There was a problem placing your Estimate: ' . $e->getMessage());
        }
    }
}
