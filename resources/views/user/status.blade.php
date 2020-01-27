<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="{{ URL::to('img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ URL::to('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ URL::to('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ URL::to('css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet" />
  <link href="{{ URL::to('css/multiform.css') }}" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="{{ URL::to('img/oau.png') }}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ URL::to('img/theme/team-1-800x800.jpg') }}
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('user.logout') }}" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="{{ URL::to('img/brand/blue.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
          <a class=" nav-link " href="{{ route('user.dashboard') }}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.apply') }}">
              <i class="ni ni-planet text-blue"></i> Apply for Clearance
            </a>
          </li>

            <li class="nav-item">
            <a class="nav-link " href="{{ route('user.graduating') }}">
              <i class="ni ni-planet text-yellow"></i> View Graduating List
            </a>
          </li>


                    <li class="nav-item">
            <a class="nav-link " href="{{ route('user.apply') }}">
              <i class="ni ni-key-25 ni ni-pin-3 text-orange"></i> Check Application Status
            </a>
          </li>

            <li class="nav-item">
            <a class="nav-link " href="{{ route('user.logout') }}">
              <i class="ni ni-planet text-blue"></i> Logout
            </a>
          </li>

        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->


      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('user.dashboard') }}">User Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ URL::to('img/oau.png') }}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Logout</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
              </div>

              <div class="dropdown-divider"></div>
              <a href="{{ route('user.logout') }}" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->

    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">

        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Submission Status</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         @if(Auth::user()->is_approved)
                        <div class="alert alert-info" role="alert">
                      <h4 class="alert-heading"></h4>
                      <strong>Thanks, Your clearance Verification has been approved, You can now proceed with other steps.</strong>
                    </div>
                        @else
                              <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Library</a>
                                <a class="nav-item nav-link" id="nav-hall-tab" data-toggle="tab" href="#nav-hall" role="tab" aria-controls="nav-hall" aria-selected="false">Halls</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">DSA</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Departmental </a>
                            </div>
                        </nav>
                        <form method="POST" action="{{ route('user.apply.post') }}" enctype="multipart/form-data">
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-group">
                                    <label>Upload Library Clearance form </label>
                                    <input class="form-control" type="file" name="lib_file" id="lib_file" />
                                </div>

                                <div class="form-group">
                                    <label> Upload Borrowers Card </label>
                                    <input type="file" name="borrow_file" id="borrow_file" class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label> Upload Library Card</label>
                                    <input type="file" name="libcard_file" id="libcard_file" class="form-control" />
                                </div>
                            </div>

                              <div class="tab-pane fade show" id="nav-hall" role="tabpanel" aria-labelledby="nav-hall-tab">

                                <div class="form-group">
                                    <label> Upload hall Clearance form</label>
                                    <input type="file" name="hall_file" id="hall_file" class="form-control" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="form-group">
                                    <label>DSA Fee Transaction Receipt ID </label>
                                    <input type="text" name="dsa_string" id="dsa_string" class='form-control' />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                               <div class="form-group">
                                   <label>Part Adviser Name</label>
                                   <input type="text" name="adviser_name" class="form-control">
                               </div>

                                <div class="form-group">
                                   <label>Part Adviser Email</label>
                                   <input type="text" name="adviser_email" class="form-control">
                               </div>

                               <div class="form-group">
                                   <label>Upload Clearance file for Department</label>
                                   <input type="file" name="dept_file" class="form-control" id="dept_file" />
                               </div>

                               <input type="submit" class="btn btn-primary" value="APPLY FOR CLEARANCE" />
                               <input type="hidden" name="_token" value="{{ Session::token() }}"

                            </div>
                        </div>
                        </form>
                        @endif
                    </div>
                    <br/>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading"></h4>
                      <strong> {{ Session::get('success') }}</strong>
                    </div>
                    @endif
                    <br/>
                    @if(count($errors) > 0)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      @foreach ($errors->all() as $err)
                          <li>{{ $err }}</li>
                      @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2020 <a href="https://eportal.oauife.edu.ng" class="font-weight-bold ml-1" target="_blank">Clearance System</a>
            </div>
          </div>
          <div class="col-xl-6">

          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{ URL::to('js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ URL::to('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="{{ URL::to('js/multiform.js') }}"></script>

</body>

</html>
