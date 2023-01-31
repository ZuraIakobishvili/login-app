@extends('layouts.app')

@section('title') Show Admin Details @endsection

@section('content')

<h5> Back to <a href="{{ route('admins') }}"> Admins Page </a></h5><br>

<div> {{ $admin->name }}</div>
<div> {{ $admin->email }}</div>

@endsection