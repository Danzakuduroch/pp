<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        return view('contracts');
    }

    public function form()
    {
        return view('contract-form');
    }
} 