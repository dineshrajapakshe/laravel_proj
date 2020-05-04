<?php

namespace App\Http\Controllers;

use App\larvel_proj;
use App\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function add_job()
    {
        return view('addjob');
    }
    public function pending_job()
    {
        return view('pendingjob');
    }
    public function cloased_job()
    {
        return view('cloasedjob');
    }
    public function edit_profile()
    {
        return view('editpro');
    }
    public function depart()
    {
        $department = User::pluck('name', 'id');
        return view('addjob',compact('department'));
    }
}
