<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConscriptController extends Controller
{
    public function index()
    {
        return view('conscripts');
    }
} 