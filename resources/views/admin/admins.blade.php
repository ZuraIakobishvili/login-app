@extends('layouts.app')

@section('title') Admin Page @endsection
@section('content')

<h5> Back to <a href="{{ route('dashboard') }}"> Dashboard </a></h5> <br><br>
    

    @foreach($admins as $admin)
   <h5>{{ $admin->id }}. {{ $admin->name }}</h5>
   <div class="crud">
        <a href="{{ route('admin.show', $admin->id) }}" class="btn btn-info" >Show Details</a>
        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning" >Edit Details</a>
        <form action="{{ route('admin.delete', $admin->id) }}" method="POST">
         @csrf
         @method('DELETE')
             <button class="btn btn-danger" type="submit">Delete</button>
         </form>
   </div>
    @endforeach
    <br>
   <h5><a href="{{ route('admin.create') }}"> Add Admin </a></h5>

@endsection