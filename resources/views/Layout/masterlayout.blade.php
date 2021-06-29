
<!doctype html>
<html lang="en">
  <head>
  <title>{{ $title }} | FundBox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('/Pages/Home/Header/fonts/icomoon/style.css') }}"><!--Header-->
    <link rel="stylesheet" href="{{ asset('/Pages/Home/Header/css/owl.carousel.min.css') }}"><!--Header-->
    <link rel="stylesheet" href="{{ asset('/Pages/Home/Header/css/bootstrap.min.css') }}"><!--Header-->
    <link rel="stylesheet" href="{{ asset('/Pages/Home/Header/css/style.css') }}"><!--Header-->
    
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"><!--Footer-->
    <link rel="stylesheet" href="{{ asset('/Pages/Home/Footer/css/ionicons.min.css') }}"><!--Footer-->
    <link rel="stylesheet" href="{{ asset('/Pages/Home/Footer/css/style.css') }}"><!--Footer-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/60da32e465b7290ac6385f6c/1f9a5djrb';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </head>
  <body>
@section('header')
  <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-youtube"></span> <span class="d-none d-md-inline-block"></span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block"></span></a>

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <img src="{{ asset('/images/logo/sitelogo.png')}}" alt="site logo">
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/" class="nav-link">Home</a></li>
                  <li class="has-children">
                    <a href="#about-section" class="nav-link">Our Team</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="/Ourteam/Organization" class="nav-link">Organization</a></li>
                        <li><a href="/Ourteam/Volunteers" class="nav-link">Our Volunteers</a></li>
                      </ul>
                  </li>
                  <li><a href="/events" class="nav-link">Events</a></li>
                  <li><a href="/about" class="nav-link">About Us</a></li>
                  <li><a href="/contact" class="nav-link">Contact</a></li>
                  <li><a href="/FAQ" class="nav-link">FAQ</a></li>
                  <li><a href="/SignIn" class="nav-link">Sign in</a></li>
                  <li><a href="/SignUp"><button type="button" class="btn btn-outline-success">Start Donation</button></a></li>

                      
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>
@show

@yield('content')


@section('footer')
<footer class="footer-01">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Fundbox</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Latest Events</h2>
						<div class="block-21 mb-4 d-flex">
            <img class="img mr-4 rounded" src="{{ asset('/Pages/Home/Footer/images/img2.jpg')}}" alt="Event Image">
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
            <img class="img mr-4 rounded" src="{{ asset('/Pages/Home/Footer/images/img1.jpg')}}" alt="Event Image">
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="/" class="py-2 d-block">Home</a></li>
              <li><a href="/about" class="py-2 d-block">About</a></li>
              <li><a href="/events" class="py-2 d-block">Events</a></li>
              <li><a href="/Ourteam/Organization" class="py-2 d-block">Organization</a></li>
              <li><a href="/Ourteam/Volunteers" class="py-2 d-block">Our Volunteers</a></li>
              <li><a href="/contact" class="py-2 d-block">Contact</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Have a Questions?</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon ion-ios-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon ion-ios-call"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon ion-ios-send"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">
            <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href=# target="_blank">APWT_B_GROUP_7 </a></p>
          </div>
        </div>
			</div>
		</footer>
@show


<!--start footer js-->

<script src="{{ asset('/Pages/Home/Footer/js/jquery.min.js') }}"></script>
<script src="{{ asset('/Pages/Home/Footer/js/popper.js') }}"></script>
<script src="{{ asset('/Pages/Home/Footer/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/Pages/Home/Footer/js/main.js') }}"></script>

<!--start footer js-->

<!--start Header js-->

<script src="{{ asset('/Pages/Home/Header/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/Pages/Home/Header/js/popper.min.js') }}"></script>
<script src="{{ asset('/Pages/Home/Header/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/Pages/Home/Header/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/Pages/Home/Header/js//main.js') }}"></script>

<!--start Header js-->

</body>
</html>