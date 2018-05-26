<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }
    public function services()
    {
        return view('home.services');
    }
    public function portfolio()
    {
        return view('home.portfolio');
    }
    public function contacts()
    {
        return view('home.contacts');
    }
}
