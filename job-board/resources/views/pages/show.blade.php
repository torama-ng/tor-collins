@extends('layouts.app')

@section('content')


<div class="card text-center">
    <div class="card-header">
      Job Details {{$job->id}}
    </div>
    <div class="card-body">
    <h4 class="card-title"><strong>{{$job->jobTitle}}</strong></h4>
    
    <a href="#"><p class="btn btn-primary btn-success btn-lg">Apply Now</p></a>
    </div>
    <div class="card-footer text-muted">
      Added {{$job->created_at}} 
    </div>
  </div>
@endsection