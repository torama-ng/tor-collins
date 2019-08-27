@extends('layouts.app')

@section('content')
    <h1 class="header">Don't search for jobs.
    <br>
    Find the right fit instead.
    </h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-default ">
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> --}}
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link " href="/jobs" role="button">
                   Find Jobs
                  </a>
                </li>
                <li class="nav-item ">
                        <a class="nav-link " href="/company" role="button">
                         Company
                        </a>
                </li>
                <li class="nav-item ">
                        <a class="nav-link " href="#" role="button">
                         Advice
                        </a>
                </li>
                
               
              </ul>
             
            </div>
          </nav>
    <div class="container quote">

    <div class="img-decor-bg">

        <img src="/storage/laravel.jpg" alt="" class="float-right rounded img-thumbnail img-fluid" style="width: 350px; height: 300px;">

    </div>



   

</div>

<div class="container down">

    <form method="get" action="/search" class="form-inline my-2 my-lg-0">

        <input class="form-control form-control-lg mr-sm-4" name="searchName" type="search" placeholder="Search" aria-label="Search">

        <input class="form-control form-control-lg mr-sm-4" name="searchLocation" type="search" placeholder="Location" aria-label="Search">

        <button class="btn btn-dark btn-lg my-2 my-sm-0" type="submit" style=" border-radius: 10px;">Search</button>

    </form>

  

</div>
@endsection
