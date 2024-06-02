<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {   
        // return view('genaral');
        return view('login');
    }
    public function signup()
    {   
        // return view('genaral');
        return view('signup');
    }
}