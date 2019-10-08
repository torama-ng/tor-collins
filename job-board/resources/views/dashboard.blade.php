@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::check())
                            @if (Auth::user()->user_type === 'employer')
                            <h3>Jobs You've Created</h3>
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                    </tr>
                                    @foreach($jobs as $job)
                                    <tr>
                                        <th>
                                            {{$job->jobTitle}}
                                        </th>
                                    </tr>
                                    @endforeach
                                    
                                </table>
                            @endif 
                            
                            @if (Auth::user()->user_type === 'candidate')
                                <h3>My Resume</h3>
                                <table class="table table-striped">
                                    <tr>
                                        <th>Resume</th>  
                                    </tr>
                                    @foreach($resume as $data)
                                    <tr>
                                        <th>
                                            {{$data->name}}
                                        </th>
                                    </tr>
                                    @endforeach
                                </table>
                            @endif
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
