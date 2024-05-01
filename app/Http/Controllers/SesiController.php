<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email haruas diisi',
            'password.required' => 'password haruas diisi',
        ]);

        $infologin= [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin))
        {
            if(Auth::user()->role == 'operator'){
                return redirect('admin/operator');
            }elseif (Auth::user()->role == 'mahasiswa'){
                return redirect('admin/mahasiswa');
            }elseif (Auth::user()->role == 'dosen'){
                return redirect('admin/dosen');
            }
        }else{
            return redirect('/login')->withErrors('Tidak sesuai')->withInput();
        }
    }
}
