<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function admins()
    {
        $admins = Admin::all();
        return view('admin/admins', compact('admins'));
    }
    
    public function create() 
    {
        return view('admin/add-admin');
    }

    public function store(AdminRequest $request)
    {
        
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('admins');
    }

    public function showAdmin(Admin $admin) 
    {
        return view('admin/show-admin', compact('admin'));
    }

    public function editAdmin(Admin $admin) 
    {
        return view('admin/update-admin', compact('admin'));
    }

    public function updateAdmin(Admin $admin, AdminRequest $request) 
    {
        $admin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('admins');
    }

    public function destroy( $admin)
    {
        $admin = Admin::findOrFail($admin); 
        $admin->delete();
        return redirect()->route('admins');
    }
}
