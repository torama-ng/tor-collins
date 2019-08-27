@extends('layouts.app')

@section('content')
    <div class="col-md-6">   
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
            
       
        
        {{$jobs->links()}}
            
        @endif
    </div>
    <div class="col-md-6">
            <div class="card text-center">
                    <div class="card-header">
                      Job Details {{$job->id}}
                    </div>
                    <div class="card-body">
                    <h4 class="card-title"><strong>{{$job->jobTitle}}</strong></h4>
                    <h5 class="card-text"><strong>{{$job->companyName}}</strong></h5>
                    <h6 class="card-text">{{$job->state}}</h6>
                    <h6 class="card-text">{{$job->ministry}}</h6>
                    <h6 class="card-text">{{$job->schedule}}</h6>
                    <h6 class="card-text">{{$job->jobFunction}}</h6>
                    <p class="card-text">{{$job->jobDescription}}</p>
                    <a href="#"><p class="btn btn-primary btn-success btn-lg">Apply Now</p></a>
                    </div>
                    <div class="card-footer text-muted">
                      Added {{$job->created_at}} 
                    </div>
                  </div>
    </div>
    
@endsection