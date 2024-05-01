<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboard');
    }

    function operator()
    {
        return view('dashboard');
    }
    function mahasiswa()
    {
        return view('dashboard');
    }
    function dosen()
    {
        return view('dashboard');
    }
    
}
