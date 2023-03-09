<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.home');
    }

    public function resources()
    {
        return view('dashboard.resources');
    }
    public function athletes()
    {
        return view('dashboard.athletes');
    }
    public function jobs()
{
    return view('dashboard.jobs');
}
    public function sponserpro()
    {
        return view('dashboard.sponserpro');
    }

    public function job(){

        return 'yes';
    }
}
