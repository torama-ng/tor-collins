@extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mx-md-n5">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Welcome Admin User {{ Auth::user()->name }}
                        <div class="text">
                            <a href="{{route('admin.users.index')}}">Manage Users</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection