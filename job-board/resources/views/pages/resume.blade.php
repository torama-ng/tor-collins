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
            <form method="POST" action="{{action('ResumesController@store')}}" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="POST">
                  
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="section detail-desc">
							<div class="container">
								<div class="ur-detail-wrap create-kit padd-bot-0">
								
									<div class="row">
										<div class="detail-pic js">
											<div class="box">
												{{-- <input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
												<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label> --}}
											</div>
										</div>
									</div>
								
									<div class="row bottom-mrg add-feild">
										
											<div class="col-md-6 col-sm-6">
												<div class="input-group">
													<input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Your Name">
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="input-group">
													<input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Your Email">
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="input-group">
													<input type="text" class="form-control" value="{{old('professionalTitle')}}" name="professionalTitle" placeholder="Professional Title">
												</div>
											</div>
											
											<div class="col-md-6 col-sm-6">
												<div class="input-group">
													<select name="category" value="{{old('category')}}" class="form-control input-lg">
														<option>All Categories</option>
														<option>Software</option>
														<option>Hardware</option>
														<option>Machanical</option>
														<option>HR/Manager</option>
													</select>
												</div>
											</div>
											
											<div class="col-md-12 col-sm-12">
												<textarea class="form-control" value="{{old('aboutNote')}}" name="aboutNote" placeholder="About Notes"></textarea>
											</div>
											
										
									</div>
								
									<div class="row no-padd">
										<div class="detail pannel-footer">
											<div class="col-md-12 col-sm-12">
												<div class="detail-pannel-footer-btn pull-right">
													<label for="picture">Choose Picture</label>
													<input type="file" value="{{old('picture')}}" name="picture" class="footer-btn choose-cover"/>
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
									
										<h2 class="detail-title">General Information</h2>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-phone"></i></span>
												<input type="text" value="{{old('phone')}}" name="phone" class="form-control" placeholder="Phone Number">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
												<input type="text" class="form-control" value="{{old('location')}}" name="location" placeholder="Location: London UK, Newyork..">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
												<input type="text" name="dob" value="{{old('dob')}}" class="form-control">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-flag"></i></span>
												<select name="region" value="{{old('region')}}" class="form-control input-lg">
													<option>Select Region</option>
													<option>United Kingdom</option>
													<option>United State</option>
													<option>India</option>
													<option>More Other</option>
												</select>
											</div>	
										</div>
										
								
								</div>
								
								<div class="row bottom-mrg extra-mrg">
									
										<h2 class="detail-title">Social Profile</h2>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
												<input type="text" name="fbLink" value="{{old('fbLink')}}" class="form-control" placeholder="Profile Link">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
												<input type="text" name="gLink" value="{{old('gLink')}}" class="form-control" placeholder="Profile Link">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
												<input type="text" name="twLink" value="{{old('twLink')}}" class="form-control" placeholder="Profile Link">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
												<input type="text" name="igLink" value="{{old('igLink')}}" class="form-control" placeholder="Profile Link">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
												<input type="text" name="lnLink" value="{{old('lnLink')}}" class="form-control" placeholder="Profile Link">
											</div>	
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												
											</div>	
										</div>
										
									
								</div>
								
								<div class="row bottom-mrg extra-mrg">
									
										<h2 class="detail-title">Resume Content</h2>
										<div class="col-md-12 col-sm-12">
											<textarea class="form-control textarea" value="{{old('resumeContent')}}" name="resumeContent" placeholder="About Company"></textarea>
										</div>	
										
									
								</div>
								<div class="row bottom-mrg extra-mrg">
									
										<h2 class="detail-title">Add Education</h2>
										<div class="extra-field-box">
											<div class="multi-box">	
												<div class="dublicat-box">
													<div class="col-md-12 col-sm-12">
														<input type="text" class="form-control" value="{{old('schoolName')}}" name="schoolName" placeholder="School Name, e.g. Master Of Technology">
													</div>
													
													<div class="col-md-12 col-sm-12">
														<input type="text" class="form-control" value="{{old('qualification')}}" name="qualification" placeholder="Qualification, e.g. Master Of Arts">
													</div>
													
													<div class="col-md-6 col-sm-6">
														<div class="input-group">
															<span class="input-group-addon">Date From</span>
															<input type="date" name="dateFrom" value="{{old('dateFrom')}}" class="form-control">
														</div>
													</div>
													
													<div class="col-md-6 col-sm-6">
														<div class="input-group">
															<span class="input-group-addon">Date To</span>
															<input type="date" name="dateTo" value="{{old('dateTo')}}" class="form-control">
														</div>
													</div>
													
													<div class="col-md-12 col-sm-12">
														<textarea class="form-control textarea" value="{{old('notes')}}" name="notes" placeholder="Notes"></textarea>
													</div>
													
													
												</div>
											</div>									
										
										</div>
									
								</div>
								
								<div class="row bottom-mrg extra-mrg">
									
										<h2 class="detail-title">Add Experience</h2>
										<div class="extra-field-box">
											<div class="multi-box">	
												<div class="dublicat-box">
													<div class="col-md-12 col-sm-12">
														<input type="text" name="employer" value="{{old('employer')}}" class="form-control" placeholder="Employer">
													</div>
													
													<div class="col-md-12 col-sm-12">
														<input type="text" name="position" value="{{old('position')}}" class="form-control" placeholder="Position, e.g. Web Designer">
													</div>
													
													<div class="col-md-6 col-sm-6">
														<div class="input-group">
															<span class="input-group-addon">Date From</span>
															<input type="date" name="dateFromEx" value="{{old('dateFromEx')}}" class="form-control">
														</div>
													</div>
													
													<div class="col-md-6 col-sm-6">
														<div class="input-group">
															<span class="input-group-addon">Date To</span>
															<input type="date" name="dateToEx" value="{{old('dateToEx')}}" class="form-control">
														</div>
													</div>
													
													<div class="col-md-12 col-sm-12">
														<textarea class="form-control textarea" value="{{old('notesSecond')}}" name="notesSecond" placeholder="Notes"></textarea>
													</div>
													
												</div>
											</div>									
										</div>
									
								</div>
								
								<div class="row bottom-mrg extra-mrg">
									
										<h2 class="detail-title">Add Skills</h2>
										<div class="extra-field-box">
											<div class="multi-box">	
												<div class="dublicat-box">
												
													<div class="col-md-12 col-sm-12">
														<input type="text" name="skill" value="{{old('skill')}}" class="form-control" placeholder="Skills, e.g. Css, Html...">
													</div>
													
													<div class="col-md-12 col-sm-12">
														<div class="input-group">
														<span class="input-group-addon">%</span>
															<input type="text" name="percent" value="{{old('percent')}}" class="form-control" placeholder="85%">
														</div>
													</div>
														
												</div>
											</div>									
										</div>
									
								</div>
								<div class="row bottom-mrg extra-mrg">
									
										<div class="col-md-12">
											<button class="btn btn-success btn-primary small-btn">Submit your company</button>
										</div>
									
								</div>					
							</div>
						</section>
                {{csrf_field()}}
            </form>
			</section>
			<!-- full detail SetionStart-->
@endsection