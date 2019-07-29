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
                    <a href="/posts/create" class="btn btn-primary">Add Receipt</a>
                   <h3>Your Receipts</h3>
                   <table class="table">
                    <thead class="thead-dark">
                       <tr>
                            <th>Customer Name</th>
                            <th>Action Taken</th>
                            <th>Date Recorded</th>
                            <th>Details</th>
                       </tr>
                    </thead>
                       @foreach($posts as $post)
                       <tr>
                            <td>{{$post->customerName}}</td>
                            <td>{{$post->actionTaken}}</td>
                            <td>{{$post->dateRecorded}}</td>
                            <td><a href="posts/{{$post->id}}" class="btn btn-primary">View Details</a></td>
                       </tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
