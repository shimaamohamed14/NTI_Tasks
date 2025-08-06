<!-- {{-- @extends - Use the main layout file as the base template --}} -->
@extends('layouts.app')

<!-- {{-- @section('content') - Define the content that goes into the layout's @yield('content') --}} -->
@section('content')
<div class="container text-center py-5">
    <h1 class="mb-4">Welcome to the Articles App</h1>
    <p class="lead">Laravel + Bootstrap simple app to manage articles.</p>
     <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-6">
            <a href="{{route('dashboard')}}" type="button" class="btn btn-primary btn-lg mb-4">Go To Dashboard</a>
     </div>
    
</div>
@endsection