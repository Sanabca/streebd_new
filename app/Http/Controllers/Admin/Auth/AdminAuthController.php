<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminAuthController extends Controller
{
    public function login(Request $request) {
       
        if ($request->isMethod('post')) {
            
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                $request->session()->regenerate();
        
                return redirect()->intended('admin/dashboard');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        // return redirect()->intended('admin/dashboard');

        return view('admin.auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('admin.login')); 
    }
}
