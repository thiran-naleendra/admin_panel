<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('create_request');
    }
    public function view_request()
    {
        return view('view_request');
    }
}
