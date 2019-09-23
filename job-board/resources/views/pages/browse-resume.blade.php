@extends('layouts.app')
@section('content')
<div class="Loader"></div>
<div class="wrapper">
        <div class="clearfix"></div>
			
        <!-- Title Header Start -->
        <section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
            <div class="container">
                <h1>Browse Resume</h1>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- Title Header End -->
        
        <!-- Browse Resume List Start -->
        <section class="manage-company">
            <div class="container">
                @if (count($resumes) > 0)
                @foreach ($resumes as $resume)    
                <a href="resumes/{{$resume->id}}" class="item-click">
                            <article>
                                <div class="brows-resume">
                                    <div class="row no-mrg">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="item-fl-box">
                                                <div class="brows-resume-pic">
                                                    <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
                                                </div>
                                                <div class="brows-resume-name">
                                                    <h4>{{$resume->name}}</h4>
                                                    <span class="brows-resume-designation">{{$resume->category}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="brows-resume-location">
                                                <p><i class="fa fa-map-marker"></i> {{$resume->location}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="browse-resume-rate">
                                                <span><i class="fa fa-money"></i>$15/hour</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row extra-mrg row-skill">
                                        <div class="browse-resume-skills">
                                            <div class="col-md-9 col-sm-8">
                                                <div class="br-resume">
                                                    <span>{{$resume->skill}}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="browse-resume-exp">
                                                    <span class="resume-exp">Exp. 3 Year</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    @endforeach
                @endif
            </div>
        </section>
    </div>
        <!-- Browse Resume List End -->
@endsection