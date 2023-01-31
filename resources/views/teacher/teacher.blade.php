@extends('layouts.app')

@section('title') Teachers @endsection

@section('content')

<h5>Back to<a style="text-decoration:none;" href="{{ route('dashboard') }}">  Dashboard </a></h5><br>

@foreach($teachers as $teacher)

    <h5>{{ $teacher->id }}.{{ $teacher->name }}</h5>

@endforeach
<br>
<h5><a href="{{ route('teacher.create') }}"> Add Teacher </a></h5><br>

@endsection