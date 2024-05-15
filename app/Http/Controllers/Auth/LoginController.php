<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('student_number', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/home');
        }

        return back()->withErrors(['student_number' => 'Invalid student account or password'])->withInput($request->only('student_number'));

        
    }
}
