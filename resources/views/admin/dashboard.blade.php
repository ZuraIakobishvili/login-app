@extends('layouts.app')

@section('title') Dashboard @endsection
@section('content')
        {{-- @dd(Auth::guard()) --}}
       
        @if(Auth::guard('web')->check())
            Hello, <h4> {{Auth::guard('web')->user()->name}}</h4><br>

        @elseif(Auth::guard('admin')->check())
            Hello, <h4> {{Auth::guard('admin')->user()->name}}</h4><br>

        @elseif (Auth::guard('teacher')->check())
            Hello, <h4> {{Auth::guard('teacher')->user()->name}}</h4><br>

        @elseif(Auth::guard('football')->check())
            Hello, <h4> {{Auth::guard('football')->user()->name}}</h4><br>

        @else
            Hello , <h4> {{ Auth::user()->name }}</h4><br>

        @endif
   
        <h5><a href="{{ route('admins') }}">Admins</a></h5>
    <h5><a href="{{ route('teachers') }}">Teachers</a></h5>
    {{-- <a href="{{ route('football.index') }}">Add Footbal Player</a><br> --}}
    <h5><a style="color:red" href="{{ route('logout') }}">Logout</a></h5>

    
@endsection