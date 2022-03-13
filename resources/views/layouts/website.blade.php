
<!DOCTYPE html>
<html lang="zxx"> 

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>{{ config('app.name') }} - @yield('title')</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="/assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/preview.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        
    </head>
    <body class="defult-home">
        
        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   <div class='loader-icon'><img src="/assets/images/fav.png" alt="Bizup Consulting Business"></div>
               </div>
           </div>              
       </div>
        <!--Preloader area end here-->
     
        <!-- Main content Start -->
        <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style2 header-transparent">
                <!-- Topbar Area Start -->
                <div class="topbar-area style1">
                    <div class="container custom">
                        <div class="row y-middle">
                            <div class="col-lg-10">
                                <div class="topbar-contact">
                                   <ul>
                                       <li>
                                           <i class="flaticon-email"></i>
                                           <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                                       </li>
                                       
                                       <li>
                                           <i class="flaticon-location"></i>
                                          {{ config('app.address')}}
                                       </li>
                                   </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container custom">
                        <div class="row-table">
                            <div class="col-cell header-logo">                                  
                                <div class="logo-area">
                                    <a href="/">
                                        <img src="/assets/images/logo-dark.png" alt="logo">  
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">
                                                <li class=" current-menu-item">
                                                    <a href="/">Home</a>
                                                    
                                                </li>
                                               
                                                <li >
                                                    <a href="{{ route('about') }}">About Us</a>
                                                    
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Investors Relation</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('philosophy')}}">Investment Philosophy</a></li>
                                                         <li><a href="{{ route('risk')}}">Risk Consideration</a></li>
                                                        <li><a href="{{ route('scheme')}}">Affiliate Scheme </a></li>
                                                        <li><a href="{{ route('culture')}}">Our Culture</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/#packages">Packages</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('trade')}}">Cryptocurrency Trade</a></li>
                                                        <li><a href="{{ route('exchange')}}">Foreign Exchange</a></li>
                                                        <li><a href="{{ route('stock')}}">Stock Market Analysis</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/#contact">Contact Us</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Account</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('register')}}">Register</a></li>
                                                        <li><a href="{{ route('login')}}">Login</a></li>
                                                    </ul>
                                                </li>
                                              
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="expand-btn-inner">
                                    <ul>
                                        
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <a id="nav-close" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <div class="canvas-logo">
                        <a href="/"><img src="/assets/images/logo-dark.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>One of our strongest advantages over competitors is that we provide the utmost flexibility and the most important insurance on funds being invested with us.</p>
                    </div>
                    <div class="media-img">
                        <img src="assets/images/off2.jpg" alt="Images">
                    </div>
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>{{ config('app.address')}}</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:{{ config('app.email')}}">{{ config('app.email')}}</a></em>
                                </div>
                             </div>
                            
                        </div>
                        <ul class="social">
                            <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li class=" current-menu-item">
                                                    <a href="/">Home</a>
                                                    
                                                </li>
                                               
                                                <li >
                                                    <a href="{{ route('about') }}">About Us</a>
                                                    
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Investors Relation</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('philosophy')}}">Investment Philosophy</a></li>
                                                         <li><a href="{{ route('risk')}}">Risk Consideration</a></li>
                                                        <li><a href="{{ route('scheme')}}">Affiliate Scheme </a></li>
                                                        <li><a href="{{ route('culture')}}">Our Culture</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/#packages">Packages</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('trade')}}">Cryptocurrency Trade</a></li>
                                                        <li><a href="{{ route('exchange')}}">Foreign Exchange</a></li>
                                                        <li><a href="{{ route('stock')}}">Stock Market Analysis</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/#contact">Contact Us</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Account</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('register')}}">Register</a></li>
                                                        <li><a href="{{ route('login')}}">Login</a></li>
                                                    </ul>
                                                </li>
                    </ul> <!-- //.nav-menu -->
                    <div class="canvas-contact">
                          <div class="address-area">
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-location"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Address</h4>
                                      <em>{{ config('app.address')}}</em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                      <i class="flaticon-email"></i>
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Email</h4>
                                      <em><a href="mailto:{{ config('app.email')}}">{{ config('app.email')}}</a></em>
                                  </div>
                              </div>
                              
                          </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

            @yield('content')
            
            @include('imports.faq')

            <!-- Contact Section Start -->
            <div class="rs-contact main-home office-modify1 responsive pb-100 md-pb-70" id="contact">
                <!-- Contact Icons Section End -->
                <div class="rs-contact pt-100 md-pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 md-mb-30">
                               <div class="contact-box">
                                   <div class="contact-icon">
                                       <img src="assets/images/contact/icons/1.png" alt="images">
                                   </div>
                                   <div class="content-text">
                                       <h2 class="title"><a href="#">Office address</a></h2>
                                       <p class="services-txt"> {{ config('app.address')}} </p>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6 sm-mb-30">
                               <div class="contact-box">
                                   <div class="contact-icon">
                                       <img src="assets/images/contact/icons/3.png" alt="images">
                                   </div>
                                   <div class="content-text">
                                       <h2 class="title"><a href="#">Email us</a></h2>
                                       <a href="mailto:{{ config('app.email')}}">{{ config('app.email')}}</a><br>
                                       <a href="mailto:{{ config('app.email2')}}">{{ config('app.email2')}}</a>
                                   </div>
                               </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Contact Icons Section End -->
            </div>
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style1">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                            <div class="footer-logo mb-40">
                                <a href="/"><img src="/assets/images/logo.png" alt=""></a>
                            </div>
                              <div class="textwidget white-color pb-40"><p>One of our strongest advantages over competitors is that we provide the utmost flexibility and the most important insurance on funds being invested with us.</p>
                              </div>
                              
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                            <h3 class="footer-title">Investors Relation</h3>
                            <ul class="site-map">
                                <li><a href="{{ route('philosophy')}}">Investment Philosophy</a></li>
                                 <li><a href="{{ route('risk')}}">Risk Consideration</a></li>
                                <li><a href="{{ route('scheme')}}">Affiliate Scheme </a></li>
                                <li><a href="{{ route('culture')}}">Our Culture</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                            <h3 class="footer-title">Services</h3>
                            <ul class="site-map">
                                <li><a href="{{ route('trade')}}">Cryptocurrency Trade</a></li>
                                <li><a href="{{ route('exchange')}}">Foreign Exchange</a></li>
                                <li><a href="{{ route('stock')}}">Stock Market Analysis</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <h3 class="footer-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">{{ config('app.address')}}</div>
                                </li>
                                
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:{{ config('app.email')}}">{{ config('app.email')}}</a>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                            <ul class="copy-right-menu">
                                <li><a href="/policy">Referral Policy</a></li>
                                <li><a href="/terms">Terms and Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center ">
                                <p>© 2021 {{ config('app.name')}}. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->
    
        
        <!-- modernizr js -->
        <script src="/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- op nav js -->
        <script src="/assets/js/jquery.nav.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <!-- owl.carousel js -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="/assets/js/skill.bars.jquery.js"></script>
        <!-- imagesloaded js -->
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
         <!-- waypoints.min js -->
        <script src="/assets/js/waypoints.min.js"></script>
        <!-- counterup.min js -->
        <script src="/assets/js/jquery.counterup.min.js"></script> 
        <!-- magnific popup js -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nivo slider js -->
        <script src="/assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- contact form js -->

        <!-- main js -->
        <script src="/assets/js/main.js"></script>

    </body>
</html>