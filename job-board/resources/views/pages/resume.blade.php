@extends('layouts.app')
@section('content')
    <div class="Loader"></div>
    <!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
		<div class="section detail-desc">
            <form method="POST" action="{{action('ResumesController@store')}}" enctype="multipart/form-data" name="data">
                        <input name="_method" type="hidden" value="POST">
                  
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="container">
					<div class="ur-detail-wrap create-kit padd-bot-0">
					
						<div class="row">
							<div class="detail-pic js">
								<div class="box">
									<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
									<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
								</div>
							</div>
						</div>
					
						<div class="row bottom-mrg">
							<form class="add-feild">
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Your Name">
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Your Email">
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Professional Title">
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<select class="form-control input-lg">
											<option>All Categories</option>
											<option>Software</option>
											<option>Hardware</option>
											<option>Machanical</option>
											<option>HR/Manager</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="About Notes"></textarea>
								</div>
								
							</form>
						</div>
					
						<div class="row no-padd">
							<div class="detail pannel-footer">
								<div class="col-md-12 col-sm-12">
									<div class="detail-pannel-footer-btn pull-right">
										<a href="#" class="footer-btn choose-cover">Choose Cover Image</a>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
			<!-- General Detail End -->
			
			<!-- full detail SetionStart-->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">General Information</h2>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Email Address">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Phone Number">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Website Address">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Location: London UK, Newyork..">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" id="dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-flag"></i></span>
									<select class="form-control input-lg">
										<option>Select Region</option>
										<option>United Kingdom</option>
										<option>United State</option>
										<option>India</option>
										<option>More Other</option>
									</select>
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Social Profile</h2>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Resume Content</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control textarea" placeholder="About Company"></textarea>
							</div>	
							
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Add Education</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="School Name, e.g. Master Of Technology">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Qualification, e.g. Master Of Arts">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date From</span>
												<input type="text" id="edu-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date To</span>
												<input type="text" id="edu-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="col-md-12 col-sm-12">
											<textarea class="form-control textarea" placeholder="Notes"></textarea>
										</div>
										
										<button type="button" class="btn remove-field">Remove</button>
									</div>
								</div>									
								<button type="button" class="add-field">Add field</button>
							</div>
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Add Experience</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Employer">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Position, e.g. Web Designer">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date From</span>
												<input type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date To</span>
												<input type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="col-md-12 col-sm-12">
											<textarea class="form-control textarea" placeholder="Notes"></textarea>
										</div>
										
										<button type="button" class="btn remove-field">Remove</button>
									</div>
								</div>									
								<button type="button" class="add-field">Add field</button>
							</div>
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Add Skills</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
									
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Skills, e.g. Css, Html...">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<div class="input-group">
											<span class="input-group-addon">%</span>
												<input type="text" class="form-control" placeholder="85%">
											</div>
										</div>
											
										<button type="button" class="btn remove-field">Remove</button>
									</div>
								</div>									
								<button type="button" class="add-field">Add field</button>
							</div>
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg">
						<form>
							<div class="col-md-12">
								<button class="btn btn-success btn-primary small-btn">Submit your company</button>
							</div>
						</form>
					</div>					
                </div>
            </form>
			</section>
			<!-- full detail SetionStart-->
@endsection