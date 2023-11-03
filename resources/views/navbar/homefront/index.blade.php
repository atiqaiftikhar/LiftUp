
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
    <header class="main-header header-style-three">

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
                        <div class="logo"><a href="index.html"><img src="{{asset('assetsfront/images/logo-2.png')}}" alt=""></a></div>
                    </div>
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
                    <!-- Main Menu -->
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










     <!--Main Slider-->
     <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{asset('assetsfront/images/main-slider/image-1.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('assetsfront/images/image-1.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['550','600','550','550']" data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['-120','-120','-120','-120']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h4>Your Vehicle is</h4>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','700','700','700']" data-whitespace="normal" data-hoffset="['15','15','15','15']" data-voffset="['-65','-65','-65','-65']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h2>Save in our Hands</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['700','700','450','450']" data-hoffset="['15','15','15','15']" data-voffset="['5','5','5','5']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[-100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="auto" data-whitespace="nowrap" data-hoffset="['15','15','15','15']" data-voffset="['105','105','105','105']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <a href="services.html" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('assetsfront/images/image-2.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['550','600','550','550']" data-whitespace="normal" data-textalign="center" data-hoffset="['0','0','0','0']" data-voffset="['-120','-120','-120','-120']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h4>The Best Car Repair and</h4>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','700','700','700']" data-textalign="center" data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['-65','-65','-65','-65']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h2>Maintenance Auto Service</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-textalign="center" data-whitespace="normal" data-width="['700','700','550','450']" data-hoffset="['0','0','0','0']" data-voffset="['5','5','5','15']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[-100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="auto" data-whitespace="nowrap" data-textalign="center" data-hoffset="['0','0','0','0']" data-voffset="['105','105','105','105']" data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <a href="services.html" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1697" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
						<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('assetsfront/images/image-3.jpg')}}">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['490','490','490','490']" data-whitespace="normal" data-hoffset="['0','15','15','15']" data-voffset="['-120','-120','-120','-120']" data-x="['right','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h4>The Best Car Repair and</h4>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['490','590','490','490']" data-whitespace="normal" data-hoffset="['0','15','15','15']" data-voffset="['-65','-65','-65','-65']" data-x="['right','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <h2>Maintenance Service</h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['490','490','390','490']" data-hoffset="['0','15','15','15']" data-voffset="['5','5','5','5']" data-x="['right','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[-100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['490','490','490','490']" data-whitespace="nowrap" data-hoffset="['0','15','15','15']" data-voffset="['105','105','105','105']" data-x="['right','left','left','left']" data-y="['middle','middle','middle','middle']" data-frames="[{" from":"y:[100%];z:0;rx:0deg;ry:0;rz:0;sx:1;sy:1;skx:0;sky:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"power3.easeinout"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"power3.easeinout"}]"="">
                            <a href="services.html" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <h2>Welcome to Autowork</h2>
                    <h4>Repair and Car Service</h4>
                    <div class="primary-text">We offer a wide range of hydraulic cartridge valves, customized hydraulic integrated manifolds and valves for hydraulic breaking systems</div>
                    <div class="text">We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry</div>
                    <ul class="list-style-one clearfix">
                        <li>Professional car cleaning</li>
                        <li>Monthly car inspections</li>
                        <li>Car painting assets and service</li>
                        <li>Creating new car assets and wheels</li>
                    </ul>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <a href="about.html"><img src="{{asset('assetsfront/images/about-img.jpg')}}" alt=""></a>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="about.html">Our Mission</a></h3>
                            <p>Our most popular service is our Virtual Receptionist. We know that sometimes it’s difficult to get to the phone</p>
                            <a href="about.html" class="read-more">Read More</a>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="about.html">Our History</a></h3>
                            <p>If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting</p>
                            <a href="about.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Fact counter -->
    <section class="fun-fact-section" style="background-image:url(images/1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-avatar-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Total experts</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-transport"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Service Done</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-boy-broad-smile"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1226">0</span>
                        <div class="counter-title"><h5>Happy Client</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-car-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Total Service</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fact counter -->

    <!-- Feature Section -->
    <section class="feature-section" style="background-image:url(images/2.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Our Features</h2>
            </div>

            <div class="features-carousel owl-carousel owl-theme">
                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-1.jpg')}}" alt=""></a>
                            <span class="price">65<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Suspension Repair</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-2.jpg')}}" alt=""></a>
                            <span class="price">45<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Engine Overhaul</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-3.jpg')}}" alt=""></a>
                            <span class="price">25<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Wheel Alignment</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-4.jpg')}}" alt=""></a>
                            <span class="price">85<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Suspension Repair</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-1.jpg')}}" alt=""></a>
                            <span class="price">65<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Suspension Repair</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-2.jpg')}}" alt=""></a>
                            <span class="price">45<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Engine Overhaul</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-3.jpg')}}" alt=""></a>
                            <span class="price">25<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Wheel Alignment</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="service-detail.html"><img src="{{asset('assetsfront/images/feature-4.jpg')}}" alt=""></a>
                            <span class="price">85<sup>$</sup></span>
                        </div>
                        <div class="lower-content">
                            <h3><a href="service-detail.html">Suspension Repair</a></h3>
                            <a href="service-detail.html" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Latest Works</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">View All</li>
                        <li class="filter" data-role="button" data-filter=".diagnostics">Diagnostics</li>
                        <li class="filter" data-role="button" data-filter=".engine">Engine</li>
                        <li class="filter" data-role="button" data-filter=".repair">Repairs</li>
                        <li class="filter" data-role="button" data-filter=".wheel">Wheel Service</li>
                        <li class="filter" data-role="button" data-filter=".conditioner">Air Conditioner</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                    <!-- Project item -->
                    <div class="gallery-item mix all engine wheel conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assetsfront/images/1_1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/1.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assetsfront/images/2_1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/2.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all engine repair conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assetsfront/images/3_1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/3.jpg ')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assetsfront/images/4_1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/4.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics conditioner engine col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assetfront/images/5.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="project-detail.html" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assetsfront/images/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="appointment.html">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box text-center">
                    <a href="#" class="theme-btn btn-style-two">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Check out our repair service for your car and get a free clean</h3>
                <a href="#" class="call-btn">Order Now</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- News section -->
    <section class="news-section" style="background-image: url(assetsfront/images/pattern.png);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Our Latest News</h2>
            </div>

            <!-- News Carousel -->
            <div class="news-carousel owl-carousel owl-theme">
                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="{{asset('assetsfront/images/news-1.jpg')}}" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="{{asset('assetsfront/images/news-2.jpg')}}" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="{{asset('assetsfront/images/news-1.jpg')}}" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <div class="image"><a href="blog-detail.html"><img src="{{asset('assetsfront/images/news-2.jpg')}}" alt=""></a></div>
                            <div class="label">
                                <div class="date"><span>17</span> oct</div>
                                <div class="likes"><i class="far fa-heart"></i> 02</div>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="blog-detail.html">Tips for car maintanence</a></h3>
                            <ul class="info">
                                <li><a href="blog-detail.html"><i class="far fa-user"></i> Admin</a></li>
                                <li><a href="blog-detail.html"><i class="far fa-comments"></i> comment 02</a></li>
                            </ul>
                            <p>A lot of auto repair customerss questions the importance of wheel alignment.</p>
                            <a href="blog-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News section -->

    <!-- Tesm Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Workers</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('assetsfront/images/team-1.png')}}" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">HARKUS HARVING</a></h3>
                                <span class="designation">Mechanic Worker</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('assetsfront/images/team-2.png')}}" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">Hackson willingham</a></h3>
                                <span class="designation">Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('assetsfront/images/team-3.png')}}" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="team-single.html">HARKUS HARVING</a></h3>
                                <span class="designation">Mechanic Worker</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tesm Section -->

    <!-- Testimonial Seectin -->
    <section class="testimonial-section" style="background-image: url(assetsfront/images/3.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What Client Says</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-carousel owl-carousel owl-theme">

				<div class="testimonial-block even">
					<figure class="thumb"><img src="{{asset('assetsfront/images/thumb-1.jpg')}}" alt=""></figure>
					<p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
					<div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
					<span class="icon fa fa-quote-left"></span>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block even">
					<figure class="thumb"><img src="{{asset('assetsfront/images/thumb-2.jpg')}}" alt=""></figure>
					<p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
					<div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
					<span class="icon fa fa-quote-left"></span>
				</div>

				<div class="testimonial-block even">
                    <figure class="thumb"><img src="{{asset('assetfront/images/thumb-1.jpg')}}" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block even">
                    <figure class="thumb"><img src="{{asset('assetsfront/images/thumb-2.jpg')}}" alt=""></figure>
                    <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    <div class="name">DAVID MATIN / <span class="designation">Manager</span></div>
                    <span class="icon fa fa-quote-left"></span>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Seectin -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact US</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <div class="contact-form">
                <form method="post" action="index.html" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group pull-right">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="tel" name="phone" placeholder="Phone No" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" name="submit-form">send Massage</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <figure><img src="{{asset('assetsfront/images/car-image.png')}}" alt=""></figure>
                    </div>

                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Address:</strong><br>13005 Greenville Avenue California.</p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Phone:</strong>+1 800125 6524</p>
                                <p><span>Email:</span><a href="#">mail@autowork.com</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Workshop Timeing :</strong><br>  10:00am to 6:00pm  Sunday Closed</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s" height="400" style="border:0;"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

     <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/5.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assetsfront/images/5.png')}}" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

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
                                    <li><a href="#">Engine Diagnostic &amp; Repair</a></li>
                                    <li><a href="#">Maintanence Inspaection</a></li>
                                    <li><a href="#">Electrical System Diagnostic</a></li>
                                    <li><a href="#">Wheel Allignment &amp; Installation</a></li>
                                    <li><a href="#">Air Conditioner Service &amp; Repair</a></li>
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
