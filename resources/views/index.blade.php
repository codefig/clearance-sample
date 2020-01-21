
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Transcript</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}" />
  </head>

  <body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
      <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
      <!-- Top Header Area -->
      <div class="top-header">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-12 h-100">
              <div
                class="header-content h-100 d-flex align-items-center justify-content-between"
              >
                <div class="academy-logo">
                  <a href="index.html">
                       <img src="{{ URL::to('img/oau.png') }}" alt="..." style="width:50px;height:50px;">
                </a>
                </div>
                <div class="login-content">
                  <a href="{{ route('user.login') }}">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Navbar Area -->
      <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
          <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="academyNav">
              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler"
                  ><span></span><span></span><span></span
                ></span>
              </div>

              <!-- Menu -->
              <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                  <div class="cross-wrap">
                    <span class="top"></span><span class="bottom"></span>
                  </div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                  <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>
                      <a href="#">Pages</a>
                      <ul class="dropdown">
                        <li><a href="{{route('admin.login')}}">Admin Login</a></li>
                      </ul>
                    </li>

                    <li><a href="">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
                <!-- Nav End -->
              </div>

              <!-- Calling Info -->
              <div class="calling-info">
                <div class="call-center">
                  <a href="tel:+654563325568889"
                    ><i class="icon-telephone-2"></i>
                    <span>(+234) 9033 423345</span></a
                  >
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div
          class="single-hero-slide bg-img"
          style="background-image: url(img/bg-img/bg-1.jpg);"
        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <div class="hero-slides-content">
                  <h4 data-animation="fadeInUp" data-delay="100ms">
                    Clearance Verification and Processing made easy.
                  </h4>
                  <h2 data-animation="fadeInUp" data-delay="400ms">
                    Welcome to Obafemi Awolowo University Clearance Portal
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Hero Slide -->
        <div
          class="single-hero-slide bg-img"
          style="background-image: url(img/bg-img/bg-2.jpg);"
        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <div class="hero-slides-content">
                  <h4 data-animation="fadeInUp" data-delay="100ms">
                    Get Cleared Online, Upload the required documents.
                  </h4>
                  <h2 data-animation="fadeInUp" data-delay="400ms">
                    Wherever, Whenever <br />
                    without Hassle
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-content">
              <div class="row no-gutters">
                <!-- Single Top Features -->
                <div class="col-12 col-md-4">
                  <div
                    class="single-top-features d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-agenda-1"></i>
                    <h5>Prepare your Valid Documents</h5>
                  </div>
                </div>
                <!-- Single Top Features -->
                <div class="col-12 col-md-4">
                  <div
                    class="single-top-features d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-assistance"></i>
                    <h5>Amazing Result Officers</h5>
                  </div>
                </div>
                <!-- Single Top Features -->
                <div class="col-12 col-md-4">
                  <div
                    class="single-top-features d-flex align-items-center justify-content-center"
                  >
                    <i class="icon-telephone-3"></i>
                    <h5>Great Support</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="cta-content d-flex align-items-center justify-content-between flex-wrap"
            >
              <h3>Quickly get your clearance done.</h3>
              <a href="#" class="btn academy-btn">See More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
      <div class="main-footer-area section-padding-100-0">
        <div class="container">
          <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-100">
                <div class="widget-title">
                  <a href="#">
                       <img src="{{ URL::to('img/oau.png') }}" alt="..." style="width:50px;height:50px;">
                    </a>
                </div>
                <p>
                  The Clearance processing department of Obafemi Awolowo
                  University, Ile-Ife.
                </p>
                <div class="footer-social-info">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-100">
                <div class="widget-title">
                  <h6>Usefull Links</h6>
                </div>
                <nav>
                  <ul class="useful-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services &amp; Features</a></li>
                    <li><a href="#">Accordions and tabs</a></li>
                    <li><a href="#">Menu ideas</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-100">
                <div class="widget-title">
                  <h6>Gallery</h6>
                </div>
                <div
                  class="gallery-list d-flex justify-content-between flex-wrap"
                >
                  <a
                    href="img/bg-img/gallery1.jpg"
                    class="gallery-img"
                    title="Gallery Image 1"
                    ><img src="img/bg-img/gallery1.jpg" alt=""
                  /></a>
                  <a
                    href="img/bg-img/gallery2.jpg"
                    class="gallery-img"
                    title="Gallery Image 2"
                    ><img src="img/bg-img/gallery2.jpg" alt=""
                  /></a>
                  <a
                    href="img/bg-img/gallery3.jpg"
                    class="gallery-img"
                    title="Gallery Image 3"
                    ><img src="img/bg-img/gallery3.jpg" alt=""
                  /></a>
                  <a
                    href="img/bg-img/gallery4.jpg"
                    class="gallery-img"
                    title="Gallery Image 4"
                    ><img src="img/bg-img/gallery4.jpg" alt=""
                  /></a>
                  <a
                    href="img/bg-img/gallery5.jpg"
                    class="gallery-img"
                    title="Gallery Image 5"
                    ><img src="img/bg-img/gallery5.jpg" alt=""
                  /></a>
                  <a
                    href="img/bg-img/gallery6.jpg"
                    class="gallery-img"
                    title="Gallery Image 6"
                    ><img src="img/bg-img/gallery6.jpg" alt=""
                  /></a>
                </div>
              </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget mb-100">
                <div class="widget-title">
                  <h6>Contact</h6>
                </div>
                <div class="single-contact d-flex mb-30">
                  <i class="icon-placeholder"></i>
                  <p>23, Ile-Ife, Osun, Nigeria</p>
                </div>
                <div class="single-contact d-flex mb-30">
                  <i class="icon-telephone-1"></i>
                  <p>Main: 0803-808-8613 <br />Office: 090-3308-8648</p>
                </div>
                <div class="single-contact d-flex">
                  <i class="icon-contract"></i>
                  <p>office@oauife.edu.ng</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-footer-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ URL::to('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ URL::to('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::to('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ URL::to('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ URL::to('js/active.js')}}"></script>
  </body>
</html>
