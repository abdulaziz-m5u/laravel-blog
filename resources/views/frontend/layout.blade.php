<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sensive Blog - Home</title>
    <link rel="icon" href="{{ asset('themes/img/Fevicon.png') }}" type="image/png" />

    <link rel="stylesheet" href="{{ asset('themes/vendors/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/vendors/themify-icons/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/vendors/linericon/style.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('themes/vendors/owl-carousel/owl.theme.default.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('themes/vendors/owl-carousel/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('themes/css/style.css') }}" />
    @stack('style-alt')
  </head>
  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ url('/') }}"
              ><img src="{{ asset('themes/img/logo.png') }}" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav justify-content-center">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                @foreach($categories as $category)
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('category.index', $category->slug) }}">{{$category->title}}</a>
                </li>
                @endforeach
              </ul>
              <ul class="nav navbar-nav navbar-right navbar-social">
                <li>
                  <a href="#"><i class="ti-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ti-twitter-alt"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ti-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="ti-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    @yield('content')

    <!--================ Start Footer Area =================-->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>
              <div class="" id="mc_embed_signup">
                <form
                  target="_blank"
                  novalidate="true"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get"
                  class="form-inline"
                >
                  <div class="d-flex flex-row">
                    <input
                      class="form-control"
                      name="EMAIL"
                      placeholder="Enter Email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Email '"
                      required=""
                      type="email"
                    />

                    <button class="click-btn btn btn-default">
                      <span class="lnr lnr-arrow-right"></span>
                    </button>
                    <div style="position: absolute; left: -5000px">
                      <input
                        name="b_36c4fd991d266f23781ded980_aefe40901a"
                        tabindex="-1"
                        value=""
                        type="text"
                      />
                    </div>

                    <!-- <div class="col-lg-4 col-md-4">
                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>  -->
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="img/instagram/i1.jpg" alt="" /></li>
                <li><img src="img/instagram/i2.jpg" alt="" /></li>
                <li><img src="img/instagram/i3.jpg" alt="" /></li>
                <li><img src="img/instagram/i4.jpg" alt="" /></li>
                <li><img src="img/instagram/i5.jpg" alt="" /></li>
                <li><img src="img/instagram/i6.jpg" alt="" /></li>
                <li><img src="img/instagram/i7.jpg" alt="" /></li>
                <li><img src="img/instagram/i8.jpg" alt="" /></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-dribbble"></i>
                </a>
                <a href="#">
                  <i class="fab fa-behance"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="footer-bottom d-flex justify-content-center align-items-center flex-wrap"
        >
          <p class="footer-text m-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | This template is made with
            <i class="fa fa-heart" aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </footer>
    <!--================ End Footer Area =================-->

    <script src="{{ asset('themes/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('themes/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('themes/js/mail-script.js') }}"></script>
    <script src="{{ asset('themes/js/main.js') }}"></script>
    @stack('script-alt')
  </body>
</html>
