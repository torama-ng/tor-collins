@extends('layouts.app')

@section('content')
    <h1>Posts Works</h1>

  <div>
    <form action="/search" method="get">
      <div class="input-group">
        <input type="search" class="form-control" name="search" id="search">
        <span class="input-group-prepend">
          <button type="submit" class="btn btn-primary">Search</button>
        </span>
      </div>
    </form>
  </div>
    @if (count($posts) > 0)
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>S/N</th>
                <th>Customer Name</th>
                <th>Bank</th>
                <th>Amount</th>
                <th>Action Taken</th>
                <th>Date Recorded</th>
                <th>View File</th>
                <th>Details</th>
          </tr>
          </thead>
       <tr>
          @foreach ($posts as $post)
          <td>{{$post->id}}</td>
          <td>{{$post->customerName}}</td>
          <td>{{$post->bank}}</td>
          <td>{{$post->amount}}</td>
          <td>{{$post->actionTaken}}</td> 
          <td>{{$post->dateRecorded}}</td>
          <td><a href="/storage/fileUpload/{{$post->fileUpload}}">View File</a></td> 
          <td><a href="posts/{{$post->id}}" class="btn btn-primary">View Details</a></td>
          {{-- <td><div>
              <small>Added by {{$post->user->name}} on {{$post->created_at}}</small>
          </div></td> --}}
          
     </tr>

        @endforeach
        {{$posts->links()}}
    @endif
    
@endsection