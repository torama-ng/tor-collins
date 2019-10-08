
<!-- Start Navigation -->
<div class="wrapper">
<nav class="navbar navbar-expand-md navbar-fixed navbar-primary white bootsnav">

  <div class="container">            
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
      <i class="fa fa-bars"></i>
    </button>
    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
        <img src="storage/logo.png" class="logo logo-display" alt="">
        <img src="storage/logo-white.png" class="logo logo-scrolled" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        {{-- <li><a href="/login"><i class="fa fa-pencil" aria-hidden="true"></i>Sign Up</a></li> --}}
        @guest
            @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-pencil" aria-hidden="true"></i>Sign Up</a>
              </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        <li><a href="/pricing"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>
        @if (Auth::guest())
          <li class="left-br"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li> 
        @endif
        
      </ul>
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
          <ul class="dropdown-menu megamenu-content" role="menu">
            <li>
              <div class="row">
                <div class="col-menu col-md-3">
                  <h6 class="title">Main Pages</h6>
                  <div class="content">
                    <ul class="menu-col">
                      <li><a href="/">Home Page</a></li>
                      <li><a href="/login">Login</a></li>
                      <li><a href="/register">Sign Up</a></li>
                    </ul>
                  </div>
                </div><!-- end col-3 -->
                @if (Auth::check())
                  @if (Auth::user()->user_type === 'candidate')
                        <div class="col-menu col-md-3">
                          <h6 class="title">For Candidate</h6>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="/jobs">Browse Jobs</a></li>
                              <li><a href="/browse-companies">Browse Companies</a></li>
                              <li><a href="/resumes/create">Add Resume</a></li>                             
                            </ul>
                          </div>
                        </div>
                  @endif

                    
                  <!-- end col-3 -->
                    @if (Auth::user()->user_type === 'employer')
                      <div class="col-menu col-md-3">
                        <h6 class="title">For Employer</h6>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="/jobs/create">Create Job</a></li>
                            <li><a href="create-company.html">Create Company</a></li>
                            <li><a href="manage-company.html">Manage Company</a></li>
                            <li><a href="/my-jobs">Jobs Created</a></li>
                            <li><a href="/resumes">Browse Resume</a></li>
                          </ul>
                        </div>
                      </div>
                    @endif

                @endif
          
            </li>
          </ul>
        </li>
        <li><a href="/blog">Blog</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>   
</nav>
<!-- End Navigation -->
<div class="clearfix"></div>
</div>
