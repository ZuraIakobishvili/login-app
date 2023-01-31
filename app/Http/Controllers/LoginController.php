<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login');
    }

    public function login(LoginRequest $request) 
    {
        if(Auth::guard('web')->attempt($request->only('email', 'password'))) 
        {
            return redirect()->route('dashboard');
        }
        
        if(auth()->guard('admin')->attempt($request->only('email', 'password'))) 
        {
            return redirect()->route('dashboard');
        }
    }
        
      

    


    public function dashboard() 
    {
        return view('admin/dashboard');
    }

    public function logout(Request $request)
    {
        
        // if(Auth::guard('admin')->check())
        // {
        //     Auth::guard('admin')->logout();
        //     return redirect('/');
        // } 
        //  if(Auth::guard('teacher')->check()) 
        // {
        //     Auth::guard('teacher')->logout();
        //     return redirect('/');
        // }
        // if(Auth::guard('football')->check())
        // {
        //     Auth::guard('football')->logout();
        //     return redirect('/');
        // }
        
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return $this->logout($request) ?: redirect('/'); 
        return redirect('/');
    }

       

}
