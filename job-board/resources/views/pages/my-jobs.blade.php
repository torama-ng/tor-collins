@extends('layouts.app')

@section('content')

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
@endsection