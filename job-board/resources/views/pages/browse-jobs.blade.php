@extends('layouts.app')

@section('content')
    <div class="Loader"></div>
    <div class="wrapper">
            <div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" >
				<div class="container">
					<h1>Browse Jobs</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- ========== Begin: Brows job ===============  -->
			<section>
				<div class="container">
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form action="/search" method="get">
								<div class="col-md-4 col-sm-4">
									<input type="text" name="searchName" class="form-control" placeholder="Keyword: Name, Tag">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" name="searchLocation" class="form-control" placeholder="Location: City, State, Zip">
								</div>
								<div class="col-md-2 col-sm-2">
									<button type="submit" class="btn btn-primary full-width">Filter</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					
					<div class="item-click">
						<article>
                            @if (count($jobs) > 0)
                                @foreach ($jobs as $job)
                                <div class="brows-job-list">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="item-fl-box">
                                                <div class="brows-job-company-img">
                                                    <a href="job-detail.html"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                                </div>
                                                <div class="brows-job-position">
                                                    <h3><a href="job-apply-detail.html">{{$job->jobTitle}}</a></h3>
                                                    <p>
                                                        <span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$750 - 800</span>
                                                        <span class="job-type cl-success bg-trans-success">{{$job->jobType}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="brows-job-location">
                                                <p><i class="fa fa-map-marker"></i>{{$job->companyLocation}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="brows-job-link">
                                                <a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="tg-themetag tg-featuretag">Premium</span>
                                @endforeach
                            @else
                                <h1>No Jobs Currently Available</h1>
                            @endif
							
						</article>
					</div>
				</div>
            </section>
    </div>
			<!-- ========== Begin: Brows job End ===============  -->
@endsection