@extends('layouts.app')

@section('content')


<div class="card text-center">
    <div class="card-header">
      Receipt{{$post->id}}
    </div>
    <div class="card-body">
    <h4 class="card-title"><strong>{{$post->customerName}}</strong></h4>
    <h5 class="card-text"><strong>{{$post->amount}}</strong></h5>
    <h6 class="card-text">{{$post->bank}}</h6>
    <h6 class="card-text">{{$post->transactonId}}</h6>
    <h6 class="card-text">{{$post->transactionDate}}</h6>
    <h6 class="card-text">{{$post->cardNumber}}</h6>
    <h6 class="card-text">{{$post->terminalLocation}}</h6>
    <h6 class="card-text">{{$post->dateRecorded}}</h6>
    <h6 class="card-text">{{$post->actionTaken}}</h6>
    <p class="card-text">{{$post->remark}}</p>
    </div>
    <div class="card-footer text-muted">
      Added by {{$post->user->name}} on {{$post->created_at}} 
    </div>
  </div>
@endsection