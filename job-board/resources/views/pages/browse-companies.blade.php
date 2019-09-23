@extends('layouts.app')
@section('content')
    <div class="Loader"></div>
    <div class="wrapper"> 
            <div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(http://via.placeholder.com/1920x850);">
				<div class="container">
					<h1>Browse Company</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			
			
			<!-- Browse Company List Start -->
			<section class="browse-company">
				<div class="container">
				
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form>
								<div class="col-md-4 col-sm-4">
									<input type="text" class="form-control" placeholder="Keyword: Name, Tag">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Location: City, State, Zip">
								</div>
								<div class="col-md-3 col-sm-3">
									<select class="form-control" id="j-category">
										<option value="">&nbsp;</option>
										<option value="1">Information Technology</option>
										<option value="2">Mechanical</option>
										<option value="3">Hardware</option>
										<option value="4">Hospitality & Tourism</option>
										<option value="5">Education & Training</option>
										<option value="6">Government & Public</option>
										<option value="7">Architecture</option>
									</select>

								</div>
								<div class="col-md-2 col-sm-2">
									<button type="submit" class="btn btn-success full-width">Filter</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">AutoDesk</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Google</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Honda</a></h4>
											<span class="brows-company-tagline">Motor Agency</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> BULLAROOK VIC 3352</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Honda</a></h4>
											<span class="brows-company-tagline">Motor Agency</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Skype</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> NUNJIKOMPITA SA 5680</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Virtue</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> JANNALI NSW 2226</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Twitter</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> BOLIVIA NSW 2372</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Autodesk</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> SUNDOWN QLD 4860</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<!-- Single Browse Company -->
					<div class="item-click">
						<article>
							<div class="brows-company">
								<div class="col-md-6 col-sm-6">
									<div class="item-fl-box">
										<div class="brows-company-pic">
											<img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
										</div>
										<div class="brows-company-name">
											<h4><a href="company-detail.html">Google</a></h4>
											<span class="brows-company-tagline">Software Company</span>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="brows-company-location">
										<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-company-position">
										<p>6 Opening</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<div class="row">
						<ul class="pagination">
							<li><a href="#"><i class="ti-arrow-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li> 
							<li><a href="#">4</a></li> 
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
							<li><a href="#"><i class="ti-arrow-right"></i></a></li> 
						</ul>
					</div>
					
				</div>
			</section>
            <!-- Browse Company List End -->
    </div>
@endsection