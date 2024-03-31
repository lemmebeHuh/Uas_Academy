<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\useraji;
use App\Models\albumaji;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }
    public function master()
    {
        $usermodel = new useraji();
        $db = $usermodel->alldata();
        // dd($db);

        return view('master', compact('db')) ;

    }
    public function album()
    {
        $usermodel = new albumaji();
        $db = $usermodel->alldata();
        // dd($db);

        return view('album', compact('db')) ;

    }
}





