<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('welcome'); // Replace 'welcome' with your desired view.
    }
}
