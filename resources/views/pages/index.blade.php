@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>This is the Form App</h1>
           <a href="{{ route('login') }}"><p class="btn btn-primary btn-lg">Login</p></a>
           <a href="{{ route('register') }}"><p class="btn btn-primary btn-success btn-lg">Register</p></a>
    </div>
@endsection
        

