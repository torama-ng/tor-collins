@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mx-md-n5">
                <div class="card-header">Manage Users {{Auth::user()->name}}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th>{{$user->name}}</th>
                                <th>{{$user->email}}</th>
                                <th>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</th>
                            <th><a href="{{route('admin.users.edit', $user->id)}}"><button class="btn btn-sm btn-danger" type="button">
                              Edit Role  </button></a></th>
                            </tr>
                            @endforeach                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection