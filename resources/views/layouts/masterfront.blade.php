
<!DOCTYPE html><html lang="en"><head>

    <title>LiftUp</title>

    <!-- Stylesheets -->
    <link href="{{asset('assetsfront/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assetsfront/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('assetsfront/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('assetsfront/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('assetsfront/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetsfront/css/responsive.css')}}" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="{{asset('assetsfront/css/color-switcher-design.css')}}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{asset('assetsfront/css/default-theme.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('assetsfront/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assetsfront/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
    <!-- Main Header-->
    <header class="main-header header-style-four">

        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li>Autocare is your one stap solution for all auto repair needs!</li>
                            <li><a href="appointment.html">Get a Free Auto Checkup Now <i class="fa fa-long-arrow-alt-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <p><i class="fa fa-phone-volume"></i> 24/7 Support  0700 125 3657</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{asset('assetsfront/images/logo-3.png')}}" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
                                    <li ><a href="/home">Home</a></li>



                                    <li class="dropdown has-dropdown"><a href="/services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                                        <ul class="dd-box-shadow">

                                          <li class="dropdown has-dropdown"><a href="/recovery"><span>Recovery</span> <i class="bi bi-chevron-down"></i></a>
                                            <ul class="dd-box-shadow">
                                              <li><a href="/recovery">Normal</a></li>
                                              <li><a href="/recovery">Flat</a></li>
                                              <li><a href="/recovery">Box</a></li>

                                            </ul>
                                          </li>
                                          <li><a href="/carwash">Car Wash</a></li>
                                          <li  class="dropdown has-dropdown"><a href="/carpassing"><span>Car Passing</span><i class="bi bi-chevron-down"></i></a>
                                            <ul class="dd-box-shadow">
                                                <li><a href="/carpassing">Normal</a></li>
                                                <li><a href="/carpassing">Flat</a></li>
                                                <li><a href="/carpassing">Box</a></li>

                                              </ul>
                                        </li>

                                          <li><a href="/carservice">Car Services</a></li>
                                          <li><a href="/tyre">Tyre</a></li>
                                          <li><a href="/battery">Battery</a></li>
                                        </ul>
                                      </li>
                                    </li>
                                    <li ><a href="/aboutus">About</a>

                                    </li>

                                    <li><a href="/contactus">Contact</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <!--outer Box-->
                        <div class="outer-box">
                            <!-- Cart Btn -->
                            <div class="cart-btn">
                                <a href="shop.html" title="">
                                    <i class="flaticon-shopping-bag-1"></i>
                                    <span class="count">2</span>
                                </a>
                            </div>


                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End outer Box-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="{{asset('assetsfront/images/logo-small.png')}}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li ><a href="/home">Home</a></li>



                                <li class="dropdown has-dropdown"><a href="/services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul class="dd-box-shadow">

                                      <li class="dropdown has-dropdown"><a href="/recovery"><span>Recovery</span> <i class="bi bi-chevron-down"></i></a>
                                        <ul class="dd-box-shadow">
                                          <li><a href="/recovery">Normal</a></li>
                                          <li><a href="/recovery">Flat</a></li>
                                          <li><a href="/recovery">Box</a></li>

                                        </ul>
                                      </li>
                                      <li><a href="/carwash">Car Wash</a></li>
                                      <li  class="dropdown has-dropdown"><a href="/carpassing"><span>Car Passing</span><i class="bi bi-chevron-down"></i></a>
                                        <ul class="dd-box-shadow">
                                            <li><a href="/carpassing">Normal</a></li>
                                            <li><a href="/carpassing">Flat</a></li>
                                            <li><a href="/carpassing">Box</a></li>

                                          </ul>
                                    </li>

                                      <li><a href="/carservice">Car Services</a></li>
                                      <li><a href="/tyre">Tyre</a></li>
                                      <li><a href="/battery">Battery</a></li>
                                    </ul>
                                  </li>
                                </li>
                                <li ><a href="/aboutus">About</a>

                                </li>

                                <li><a href="/contactus">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->


  @yield('content')


 <!-- Main Footer -->
 <footer class="main-footer" style="background-image: url(assetsfront/images/4.jpg);">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Footer Column-->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="index.html"><img src="{{asset('assetsfront/images/footer-logo.png')}}" alt=""></a>
                            </figure>
                        </div>
                        <div class="widget-content">
                            <div class="text">How to pursue pleasure rationally thats encounter consequences that extremely painful. Nor again is there anyones who loves or pursues or ut desires obtains pain of itself, because.</div>
                            <h4>Follow Us:</h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget services-widget">
                        <h2 class="widget-title">Our Services</h2>
                        <div class="widget-content">
                            <ul class="services-list">
                                <li><a href="#">Recovery</a></li>
                                <li><a href="#">Car Wash</a></li>
                                <li><a href="#">Car Passing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <!--Footer Column-->
                    <div class="footer-widget gallery-widget">
                        <h2 class="widget-title">Instragram</h2>
                         <!--Footer Column-->
                        <div class="widget-content">
                            <div class="outer clearfix">
                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/feature-1.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-1.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/feature-2.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-2.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/feature-3.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-3.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/feature-4.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-4.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/news-1.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-5.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{asset('assetsfront/images/resource/news-2.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="images/insta-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Footer Column-->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <!--Footer Column-->
                    <div class="footer-widget news-widget">
                        <h2 class="widget-title">Latest News</h2>
                         <!--Footer Column-->
                        <div class="widget-content">
                            <div class="post">
                                <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2023</span>
                            </div>

                            <div class="post">
                                <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
     <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text">
                <p>Copyrights © 2023 All Rights Reserved. by <a href="#"> Expert Themes</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
<div class="color-trigger">
    <i class="fa fa-cog"></i>
</div>
<div class="color-palate-head">
    <h6>Choose Your Color</h6>
</div>
<div class="various-color clearfix">
    <div class="colors-list">
        <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
        <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
        <span class="palate yellow-color" data-theme-file="css/color-themes/blue-theme.css"></span>
        <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
        <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
        <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
        <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
        <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
    </div>
</div>

<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li></ul>

<a href="#" class="purchase-btn">Purchase now $15</a>

<div class="palate-foo">
    <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
</div>

</div>

<script src="{{asset('assetsfront/js/jquery.js')}}"></script>
<script src="{{asset('assetsfront/js/popper.min.js')}}"></script>
<script src="{{asset('assetsfront/js/bootstrap.min.js')}}"></script>
<!--Revolution Slider-->
<script src="{{asset('assetsfront/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assetsfront/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assetsfront/js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assetsfront/js/main-slider-script.js')}}"></script>
<!--End Revolution Slider-->
<script src="{{asset('assetsfront/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assetsfront/js/owl.js')}}"></script>
<script src="{{asset('assetsfront/js/appear.js')}}"></script>
<script src="{{asset('assetsfront/js/wow.js')}}"></script>
<script src="{{asset('assetsfront/js/mixitup.js')}}"></script>
<script src="{{asset('assetsfront/js/validate.js')}}"></script>
<script src="{{asset('assetsfront/js/script.js')}}"></script>
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
<script src="{{asset('assetsfront/js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script src="{{asset('assetsfront/js/color-settings.js')}}"></script>


</body></html>

