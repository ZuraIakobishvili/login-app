<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class TeacherController extends Controller
{
    public function teachersPage() 
    {
        $teachers = Teacher::all();
        return view('teacher/teacher', compact('teachers'));
    }

    public function teacherCreate()
    {
        return view('teacher/add-teacher');
    }

    public function teacherStore(TeacherRequest $request) 
    {
        Teacher::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('teachers');
    }
}
