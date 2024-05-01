<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()
        ->route('login')
        ->with('success', 'Sukses!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $data = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if(Auth::attempt($data)){
                $request->session()->regenerate();
            
                return redirect()->route('dashboard');
            }
            return back()->with('error', 'email/password salah tuh');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
