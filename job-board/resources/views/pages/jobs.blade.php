@extends('layouts.app')

@section('content')
    <h1>Jobs</h1>
    @if (count($jobs) > 0)
        @foreach ($jobs as $job)
        <div class="card text-center">
            <div class="card-header">
              Job Available
            </div>
            <div class="card-body">
              <h3 class="card-title">{{$job->jobTitle}}</h3>
              <h4 class="card-title">{{$job->ministry}}</h4>
              <p class="card-text">{{$job->jobDescription}}</p>
              <a href="/jobs/{{$job->id}}" class="btn btn-primary">Details</a>
            </div>
            <div class="card-footer text-muted">
              Added {{$job->created_at}}
            </div>
          </div>
            
        @endforeach
        {{$jobs->links()}}
    @else    
        <h2>No Jobs Available</h2>    
    @endif
@endsection
