@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid ">
    <h1 class="text-center mb-4">Dashboard</h1>
    <div class="row mb-3">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body">
                            <h4 class="card-title mb-1">Welcome back,{{Auth::user()->name}}!</h4>
                            <p class="card-text mb-0">Here's what's happening with your articles today.</p>
                       
                    </div>
                </div>
            </div>
    </div>
    
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-3 mt-5">
    <div class="card text-center">
  <div class="card-body">
<h2 class="card-title mb-4">Total Articles: <small>{{$userArticlesCount}}</small>
 </h2>
    <a href="{{route('articles.index')}}" class="btn btn-primary">Manage My Articles</a>
  </div>
</div>
     </div>
    </div>
    


</div>
@endsection