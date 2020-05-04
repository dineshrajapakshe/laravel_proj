<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class call_dashboard extends Controller
{
    public function index()
    {
        return view('callcenter.dashboard');
    }
}
