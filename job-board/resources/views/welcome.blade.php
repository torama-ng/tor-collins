@extends('layouts.app')

@section('content')
<div class="Loader"></div>
<div class="wrapper">  
  <!-- Main Banner Section Start -->
  <div class="banner" style="background-image:url(http://via.placeholder.com/1920x850);">  
    <div class="container">
      <div class="banner-caption">
        <div class="col-md-12 col-sm-12 banner-text">
          <h1>7,000+ Browse Jobs</h1>
          <form class="form-horizontal">
            <div class="col-md-4 no-padd">
               <div class="input-group">
                 <input type="text" class="form-control right-bor" id="joblist" placeholder="Skills, Designations, Companies">
               </div>
            </div>
            <div class="col-md-3 no-padd">
               <div class="input-group">
                 <input type="text" class="form-control right-bor" id="location" placeholder="Search By Location..">
               </div>
            </div>
            
            <div class="col-md-3 no-padd">
               <div class="input-group">
                <select id="choose-city" class="form-control">
                  <option>Choose City</option>
                  <option>Chandigarh</option>
                  <option>London</option>
                  <option>England</option>
                  <option>Pratapcity</option>
                  <option>Ukrain</option>
                  <option>Wilangana</option>
                </select>
               </div>
            </div>
            
            <div class="col-md-2 no-padd">
              <div class="input-group">
                <button type="submit" class="btn btn-primary">Search Job</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <div class="company-brand">
      <div class="container">
        <div id="company-brands" class="owl-carousel">
          <div class="brand-img">
            <img src="storage/microsoft-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/img-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/mothercare-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/paypal-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/serv-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/xerox-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/yahoo-home.png" class="img-responsive" alt="" />
          </div>
          <div class="brand-img">
            <img src="storage/mothercare-home.png" class="img-responsive" alt="" />
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="clearfix"></div>
  <!-- Main Banner Section End -->
  
  <!-- Job List-->
  <section>
    <div class="container">
      
      <div class="row">
        <div class="main-heading">
          <p>200 New Jobs</p>
          <h2>New & Random <span>Jobs</span></h2>
        </div>
      </div>
      <!--/row-->
      
      <!--Browse Job In Grid-->
      <div class="row extra-mrg">
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="part-time">Part Time</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="freelanc">Freelancer</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="enternship">Enternship</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="full-time">Full Time</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="part-time">Part Time</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
            <span class="tg-themetag tg-featuretag">Premium</span>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="full-time">Full Time</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="freelanc">Freelancer</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Single Job Grid -->
        <div class="col-md-3 col-sm-6">
          <div class="grid-view brows-job-list">
            <div class="brows-job-company-img">
              <img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" />
            </div>
            <div class="brows-job-position">
              <h3><a href="job-detail.html">Web Developer</a></h3>
              <p><span>Google</span></p>
            </div>
            <div class="job-position">
              <span class="job-num">5 Position</span>
            </div>
            <div class="brows-job-type">
              <span class="enternship">Enternship</span>
            </div>
            <ul class="grid-view-caption">
              <li>
                <div class="brows-job-location">
                  <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                </div>
              </li>
              <li>
                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
              </li>
            </ul>
          </div>
        </div>
        
      </div>
      <!--/.Browse Job In Grid-->
        
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- Latest Job End-->
  
  <!-- video section Start -->
  <section class="video-sec dark" id="video" style="background-image:url(http://via.placeholder.com/1920x850);">
    <div class="container">
      <div class="row">
        <div class="main-heading">
          <p>Best For Your Projects</p>
          <h2>Watch Our <span>video</span></h2>
        </div>
      </div>
      <!--/row-->
      <div class="video-part">
        <a href="#" data-toggle="modal" data-target="#my-video" class="video-btn"><i class="fa fa-play"></i></a>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- video section Start -->

  <!-- ====================== How It Work ================= -->
  <section class="how-it-works">
    <div class="container">
      
      <div class="row" data-aos="fade-up">
        <div class="col-md-12">
          <div class="main-heading">
            <p>Working Process</p>
            <h2>How It <span>Works</span></h2>
          </div>
        </div>
      </div>
      
      <div class="row">
      
        <div class="col-md-4 col-sm-4">
          <div class="working-process">
            <span class="process-img">
              <img src="storage/step-1.png" class="img-responsive" alt="" />
              <span class="process-num">01</span>
            </span>
            <h4>Create An Account</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-4">
          <div class="working-process">
            <span class="process-img">
              <img src="storage/step-2.png" class="img-responsive" alt="" />
              <span class="process-num">02</span>
            </span>
            <h4>Search Jobs</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-4">
          <div class="working-process">
            <span class="process-img">
              <img src="storage/step-3.png" class="img-responsive" alt="" />
              <span class="process-num">03</span>
            </span>
            <h4>Save & Apply</h4>
            <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
          </div>
        </div>
        
      </div>
      
    </div>
  </section>
  <div class="clearfix"></div>
  
  <!-- testimonial section Start -->
  <section class="testimonial" id="testimonial">
    <div class="container">
      <div class="row">
        <div class="main-heading">
          <p>What Say Our Client</p>
          <h2>Our Success <span>Stories</span></h2>
        </div>
      </div>
      <!--/row-->
      <div class="row">
        <div id="client-testimonial-slider" class="owl-carousel">
          <div class="client-testimonial">
            <div class="pic">
              <img src="http://via.placeholder.com/150x150" alt="">
            </div>
            <p class="client-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
            </p>
            <h3 class="client-testimonial-title">Lacky Mole</h3>
            <ul class="client-testimonial-rating">
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star"></li>
            </ul>
          </div>

          <div class="client-testimonial">
            <div class="pic">
              <img src="http://via.placeholder.com/150x150" alt="">
            </div>
            <p class="client-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
            </p>
            <h3 class="client-testimonial-title">Karan Wessi</h3>
            <ul class="client-testimonial-rating">
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star"></li>
              <li class="fa fa-star"></li>
            </ul>
          </div>
          
          <div class="client-testimonial">
            <div class="pic">
              <img src="http://via.placeholder.com/150x150" alt="">
            </div>
            <p class="client-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
            </p>
            <h3 class="client-testimonial-title">Roul Pinchai</h3>
            <ul class="client-testimonial-rating">
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star"></li>
            </ul>
          </div>
          
          <div class="client-testimonial">
            <div class="pic">
              <img src="http://via.placeholder.com/150x150" alt="">
            </div>
            <p class="client-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.
            </p>
            <h3 class="client-testimonial-title">Adam Jinna</h3>
            <ul class="client-testimonial-rating">
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star-o"></li>
              <li class="fa fa-star"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial section End -->
  
  <!-- Candidate Section Start -->
  <section class="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main-heading">
            <p>Best Candidate of The Year</p>
            <h2>Hire Expert <span>Candidate</span></h2>
          </div>
        </div>
      </div>
      <!--/row-->
      
      <div class="row">
        
        <!-- Single Freelancer Style 2 -->
        <div class="col-md-4 col-sm-6">
          <div class="top-candidate-wrap style-2">
            <div class="top-candidate-box">
              <span class="tpc-status">Available</span>
              <h4 class="flc-rate">$17/hr</h4>
              <div class="tp-candidate-inner-box">
                <div class="top-candidate-box-thumb">
                  <img src="storage/can-5.jpg" class="img-responsive img-circle" alt="" />
                </div>
                <div class="top-candidate-box-detail">
                  <h4>Agustin L. Smith</h4>
                  <span class="location">Australia</span>
                </div>
                <div class="rattings">
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star-half fill"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="top-candidate-box-extra">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                <ul>
                  <li>Php</li>
                  <li>Android</li>
                  <li>Html</li>
                  <li class="more-skill bg-primary">+3</li>
                </ul>
              </div>
              <a href="top-candidate-detail.html" class="btn btn-candidate-two bg-default">View Detail</a>
              <a href="#l" class="btn btn-candidate-two bg-info">Shortlist</a>
            </div>
          </div>
        </div>
        
        <!-- Single Freelancer Style 2 -->
        <div class="col-md-4 col-sm-6">
          <div class="top-candidate-wrap style-2">
            <div class="top-candidate-box">
              <span class="tpc-status bg-warning">At Work</span>
              <h4 class="flc-rate">$22/hr</h4>
              <div class="tp-candidate-inner-box">
                <div class="top-candidate-box-thumb">
                  <img src="storage/can-5.jpg" class="img-responsive img-circle" alt="" />
                </div>
                <div class="top-candidate-box-detail">
                  <h4>Delores R. Williams</h4>
                  <span class="location">United States</span>
                </div>
                <div class="rattings">
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star-half fill"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="top-candidate-box-extra">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                <ul>
                  <li>Php</li>
                  <li>Android</li>
                  <li>Html</li>
                  <li class="more-skill bg-primary">+3</li>
                </ul>
              </div>
              <a href="top-candidate-detail.html" class="btn btn-candidate-two bg-default">View Detail</a>
              <a href="#l" class="btn btn-candidate-two bg-info">Shortlist</a>
            </div>
          </div>
        </div>
        
        <!-- Single Freelancer Style 2 -->
        <div class="col-md-4 col-sm-6">
          <div class="top-candidate-wrap style-2">
            <div class="top-candidate-box">
              <span class="tpc-status">Available</span>
              <h4 class="flc-rate">$19/hr</h4>
              <div class="tp-candidate-inner-box">
                <div class="top-candidate-box-thumb">
                  <img src="storage/can-5.jpg" class="img-responsive img-circle" alt="" />
                </div>
                <div class="top-candidate-box-detail">
                  <h4>Daniel Disroyer</h4>
                  <span class="location">Bangladesh</span>
                </div>
                <div class="rattings">
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star fill"></i>
                  <i class="fa fa-star-half fill"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="top-candidate-box-extra">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                <ul>
                  <li>Php</li>
                  <li>Android</li>
                  <li>Html</li>
                  <li class="more-skill bg-primary">+3</li>
                </ul>
              </div>
              <a href="top-candidate-detail.html" class="btn btn-candidate-two bg-default">View Detail</a>
              <a href="#l" class="btn btn-candidate-two bg-info">Shortlist</a>
            </div>
          </div>
        </div>
        
      </div>
      
      <!-- Single Freelancer -->
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="text-center">
            <a href="freelancers-2.html" class="btn btn-primary">Load More</a>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!-- End Candidate Section -->
  
  <!-- Download app Section Start -->
  <section class="download-app inverse-bg" style="background:url(storage/geometric-bg.jpg),linear-gradient(135deg,#11b719 0%,#11b719 100%)!important">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
          <div class="app-content">
            <h2>Download Our Best Apps</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
            <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>iPhone Store</a>
            <a href="#" class="btn call-btn gps"><i class="fa fa-android"></i>Google Store</a>
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- Download app Section End -->
  
  
  <!-- Footer Section Start -->
  <footer class="footer light-footer">
    <div class="row lg-menu">
      <div class="container">
        <div class="col-md-4 col-sm-4">
          <img src="storage/footer-logo.png" class="img-responsive" alt="" /> 
        </div>
        <div class="col-md-8 co-sm-8 pull-right">
          <ul>
            <li><a href="index.html" title="">Home</a></li>
            <li><a href="blog.html" title="">Blog</a></li>
            <li><a href="404.html" title="">404</a></li>
            <li><a href="faq.html" title="">FAQ</a></li>
            <li><a href="contact.html" title="">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row no-padding">
      <div class="container">
        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
          <h3 class="widgettitle widget-title">About Job Stock</h3>
          <div class="textwidget">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
          <p>7860 North Park Place<br>
          San Francisco, CA 94120</p>
          <p><strong>Email:</strong> Support@careerdesk</p>
          <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
          <ul class="footer-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
          </div>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
          <h3 class="widgettitle widget-title">All Navigation</h3>
          <div class="textwidget">
            <div class="textwidget">
            <ul class="footer-navigation">
              <li><a href="manage-company.html" title="">Front-end Design</a></li>
              <li><a href="manage-company.html" title="">Android Developer</a></li>
              <li><a href="manage-company.html" title="">CMS Development</a></li>
              <li><a href="manage-company.html" title="">PHP Development</a></li>
              <li><a href="manage-company.html" title="">IOS Developer</a></li>
              <li><a href="manage-company.html" title="">Iphone Developer</a></li>
            </ul>
          </div>
          </div>
          </div>
        </div>
        
        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
          <h3 class="widgettitle widget-title">All Categories</h3>
          <div class="textwidget">
            <ul class="footer-navigation">
              <li><a href="manage-company.html" title="">Front-end Design</a></li>
              <li><a href="manage-company.html" title="">Android Developer</a></li>
              <li><a href="manage-company.html" title="">CMS Development</a></li>
              <li><a href="manage-company.html" title="">PHP Development</a></li>
              <li><a href="manage-company.html" title="">IOS Developer</a></li>
              <li><a href="manage-company.html" title="">Iphone Developer</a></li>
            </ul>
          </div>
          </div>
        </div>
          
        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
          <h3 class="widgettitle widget-title">Connect Us</h3>
          <div class="textwidget">
          <form class="footer-form">
            <input type="text" class="form-control" placeholder="Your Name"> 
            <input type="text" class="form-control" placeholder="Email">
            <textarea class="form-control" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row copyright">
      <div class="container">
        <p>Copyright Job Stock © 2017. All Rights Reserved </p>
      </div>
    </div>
  </footer>
  <div class="clearfix"></div>
  <!-- Footer Section End -->
  
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
                <form class="form-inline" method="post">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                      <input type="password" name="password" class="form-control"  placeholder="Password" required="">
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
              <form class="form-inline" method="post">
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

@endsection
