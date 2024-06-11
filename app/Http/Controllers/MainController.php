<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {   
        // return view('genaral');
        // return view('login');
        return view('index');
    }
    public function signup()
    {   
        // return view('genaral');
        return view('signup');
    }
    public function genaral()
    {   
         return view('genaral');
        
    }
    public function landing()
    {   
         return view('index');
        
    }
}