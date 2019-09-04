@extends('layouts.app')

@section('content')
    {{-- <h1>Add Job</h1>
    <form method="POST" action="{{action('JobsController@store')}}" enctype="multipart/form-data" name="data">
        <input name="_method" type="hidden" value="POST">
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="{{ old('jobTitle') }}" placeholder="Job Title">
            </div>
            <div class="form-group col-md-6">
                <label for="companyName">Company Name</label>
                <input type="text" class="form-control" id="companyName" name="companyName" value="{{ old('companyName') }}" placeholder="Company Name">
            </div>
          </div>
          <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="state">State</label>
                 <select id="state" name="state" class="custom-select" value="{{ old('state') }}">
                    <option selected>Bayelsa</option>
                    <option>Rivers</option>
                    <option>Lagos</option>
                    <option>Calabar</option>
                    <option>Benin</option>
              </select>
              </div>
              <div class="form-group col-md-6">
                  <label for="ministry">Ministry</label>
                  <input type="text" class="form-control" id="ministry" name="ministry" value="{{ old('ministry') }}" placeholder="Enter Ministry">    
               </div>
    
          </div>
          <div class="form-group">
            <label for="schedule">Schedule</label>
            <select id="schedule" name="schedule" value="{{ old('schedule') }}" class="custom-select">
                  <option selected>Full-Time</option>
                  <option>Part-Time</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jobFunction">Job Function</label>
            <input type="text" class="form-control" name="jobFunction" id="jobFunction" value="{{ old('jobFunction') }}" placeholder="State Job Function">
          </div> 
          <div class="form-group">
                  <label for="jobDescription">Job Descriptions</label>
                  <textarea class="form-control" name="jobDescription" value="{{ old('jobDescription') }}" placeholder="Enter Job Descriptions" id="jobDescription">
                  </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button> 
          {{csrf_field()}}
        </form> --}}

        <div class="Loader"></div>
        <div class="wrapper">  
          <!-- Header Title Start -->
          <section class="inner-header-title blank">
            <div class="container">
            </div>
          </section>
          <div class="clearfix"></div>
          <!-- Header Title End -->
          
          <!-- General Detail Start -->
          <div class="detail-desc section">
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
                        <input type="text" class="form-control" placeholder="Job Title">
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <div class="input-group">
                        <select class="form-control input-lg">
                          <option>Job Type</option>
                          <option>Full Time</option>
                          <option>Part Time</option>
                          <option>Freelancer</option>
                          <option>Internship</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Location,e.g. London Quel Mark">
                      </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                      <textarea class="form-control" placeholder="Job Description"></textarea>
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
          
          <!-- Basic Full Detail Form Start -->
          <section class="full-detail">
            <div class="container">
              <div class="row bottom-mrg extra-mrg">
                <form>
                  <h2 class="detail-title">Company Information</h2>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                      <input type="text" class="form-control" placeholder="Company Name">
                    </div>	
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                      <input type="text" class="form-control" placeholder="Company Tagline">
                    </div>	
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Company Email">
                    </div>	
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                      <input type="text" class="form-control" placeholder="Local E.g. It Park New">
                    </div>	
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <input type="text" class="form-control" placeholder="Website">
                    </div>	
                  </div>
                  
                  <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                      <input type="text" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
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
                  <h2 class="detail-title">Job Requirement</h2>
                  <div class="col-md-12 col-sm-12">
                    <textarea class="form-control textarea" placeholder="About Company"></textarea>
                  </div>	
                  <div class="col-md-12 col-sm-12">
                    <button class="btn btn-success btn-primary small-btn">Submit your company</button>	
                  </div>	
                </form>
              </div>
            </div>
          </section>
          
          <!-- Sign Up Window Code -->
          <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                    <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content" id="myModalLabel2">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                      <img src="storage/logo.png" class="img-responsive" alt="" />
                      <div class="subscribe wow fadeInUp">
                        <form class="form-inline" method="POST" action="{{ route('login') }}">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="email"  name="email" class="form-control" placeholder="Username" required>
                              <input type="password" name="password" class="form-control"  placeholder="Login" required>
                              <div class="center">
                              <button type="submit" id="login-btn" class="submit-btn"> Login </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
    
                    <div role="tabpanel" class="tab-pane fade" id="register">
                    <img src="storage/logo.png" class="img-responsive" alt="" />
                      <form class="form-inline" method="POST" action="{{ route('register') }}">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
                              <input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
                              <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                              <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                              <div class="center">
                              <button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
            </div>
          </div>
          <script type="application/javascript">
            $('#company-dob').dateDropper();
          </script>
@endsection