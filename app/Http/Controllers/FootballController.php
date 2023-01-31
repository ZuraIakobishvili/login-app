<?php

namespace App\Http\Controllers;

use App\Http\Requests\FootballRequest;
use App\Models\Football;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class FootballController extends Controller
{
    public function index() 
    {
        return view('football/football');
    }

    public function create()
    {
        return view('football/add-football');
    } 

    public function store(FootballRequest $request) 
    {
        Football::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'club'=>$request->club,
            'country'=>$request->country,
        ]);
        return redirect()->route('football.index');
    }
}
