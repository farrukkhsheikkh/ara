<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function projects()
    {
        return view('projects');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function projectDetails()
    {
        return view('project-details');
    }
    public function services()
    {
        return view('services');
    }
    public function careers()
    {
        return view('careers');
    }
    
}
