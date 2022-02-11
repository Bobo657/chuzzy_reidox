@extends('layouts.website')
@section('title', 'Welcome Page')
@section('content')
<!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider3">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                <img src="/assets/images/slider/h2-sl1.webp" alt="" title="#slide-1" />
                <img src="/assets/images/slider/h2-sl2.webp" alt="" title="#slide-2" />
            </div>
            <!-- Slide 1 -->
            <div id="slide-1" class="slider-direction">
                <div class="content-part">
                    <div class="container">
                        <div class="slider-des">
                            <div class="sl-subtitle">Sustainable Finance</div>
                            <h1 class="sl-title">Invest For  <br>The Future </h1>
                        </div>
                        <div class="desc">We will utilize your assets and give you profit in your wallet automatically.</div>
                        <div class="slider-bottom ">
                            <a class="readon consultant slider" href="/register">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div id="slide-2" class="slider-direction">
                <div class="content-part">
                    <div class="container">
                        <div class="slider-des">
                            <div class="sl-subtitle">Discover your business</div>
                            <h1 class="sl-title">We Promote <br>Your Business</h1>
                        </div>
                        <div class="desc">Our revolutionary investment strategy is designed to create your own profitable ecosystem.</div>
                        <div class="slider-bottom ">
                            <a class="readon consultant" href="contact.html">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

     <!-- Services Section Start -->
    @include('imports.choose_us')
    <!-- Services Section End -->

    <!-- Premium Services Section Start -->
    <div id="rs-services" class="rs-services style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 d-flex align-items-center mb-60 md-mb-40">
                <div class="first-half">
                    <div class="sub-text">What We Offer</div>
                    <h2 class="title mb-0 md-pb-20">The best solutions for investing - <span>what we do.</span></h2>
                </div>
                <div class="last-half">
                    <p class="desc mb-0 pl-20 md-pl-15">Our revolutionary investment strategy is designed to create your own profitable ecosystem, secure digital assets and access to funding anywhere you are.</p>
                </div>
            </div>
            <div class="rs-carousel owl-carousel" 
                data-loop="true" 
                data-items="3" 
                data-margin="30" 
                data-autoplay="true" 
                data-hoverpause="true" 
                data-autoplay-timeout="5000" 
                data-smart-speed="800" 
                data-dots="true" 
                data-nav="false" 
                data-nav-speed="false" 

                data-md-device="3" 
                data-md-device-nav="false" 
                data-md-device-dots="true" 
                data-center-mode="false"

                data-ipad-device2="2" 
                data-ipad-device-nav2="false" 
                data-ipad-device-dots2="true"

                data-ipad-device="2" 
                data-ipad-device-nav="false" 
                data-ipad-device-dots="true" 

                data-mobile-device="1" 
                data-mobile-device-nav="false" 
                data-mobile-device-dots="true">  
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/1.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">User Friendly</a></h3>
                        <div class="desc">Our interface was developed to eliminate the haggles of using a high tech platform, No stress, easy to use.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/2.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">Top Notch Security</a></h3>
                        <div class="desc">Our platform is 100% secured, your details and funds are protected by the best security techonology available.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/3.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">Fast Notifications</a></h3>
                        <div class="desc">Our platform was designed with the thoughtful intentions that transactions should be fast and without delay.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/4.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">Instant Payments</a></h3>
                        <div class="desc">Withdrawals from {{ config('app.name')}} are paid within a short period of time. No delays, No excuses.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/5.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">Advance analytics</a></h3>
                        <div class="desc">Our team of traders are made up of professionals with over 10 years of combined trading experince.</div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="/assets/images/services/style2/6.jpg" alt="">
                    </div>
                    <div class="content-part">
                        <h3 class="title"><a href="#">Experts Support</a></h3>
                        <div class="desc">Our team of well trained assitants are ever ready to offer you support of any kind, and they are available 24/7.</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Premium Services Section End -->

    <!-- Packages Section Start -->
    @include('imports.packages')
    <!-- Process Section Start -->

    <div class="rs-process style1 bg2 pt-100 pb-100 md-pt-70 md-pb-70">                
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-5">
                    <div class="sec-title2 md-text-center">
                        <div class="sub-text">Working Process</div>
                        <h2 class="title mb-23 white-color">How we work for our valued  <span>customers.</span></h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="btn-part text-right md-text-center">
                        <a class="readon consultant discover" href="/register">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom2">
            <div class="process-effects-layer">
                <div class="row">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="rs-addon-number">
                            <div class="number-part">
                                <div class="number-image">
                                    <img src="/assets/images/process/style1/1.png" alt="Process">
                                </div>
                                <div class="number-text">
                                    <div class="number-area"> <span class="number-prefix"> 1 </span></div>
                                    <div class="number-title"><h3 class="title"> Register</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="rs-addon-number">
                            <div class="number-part">
                                <div class="number-image">
                                    <img src="/assets/images/process/style1/2.png" alt="Process">
                                </div>
                                <div class="number-text">
                                    <div class="number-area"> <span class="number-prefix"> 2 </span></div>
                                    <div class="number-title"><h3 class="title">Invest</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="rs-addon-number">
                            <div class="number-part">
                                <div class="number-image">
                                    <img src="/assets/images/process/style1/3.png" alt="Process">
                                </div>
                                <div class="number-text">
                                    <div class="number-area"> <span class="number-prefix"> 3 </span></div>
                                    <div class="number-title"><h3 class="title">Get Profit</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-addon-number">
                            <div class="number-part">
                                <div class="number-image">
                                    <img src="/assets/images/process/style1/4.png" alt="Process">
                                </div>
                                <div class="number-text">
                                    <div class="number-area"> <span class="number-prefix"> 4 </span></div>
                                    <div class="number-title"><h3 class="title">Withdraw </h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- Blog Start -->
    <div class="rs-blog style2 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row y-middle md-mb-30">
                <div class="col-lg-5 mb-20 md-mb-10">
                    <div class="sec-title2">
                        <div class="sub-text">News Updates</div>
                        <h2 class="title mb-23">Read our latest updates & business <span>tips & tricks.</span></h2>
                    </div>
                </div>
                
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                @foreach($posts as $post) 
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="#"><img src="{{ $post->url }}" alt="Blog"></a>
                    </div>
                    <div class="blog-content">
                       <ul class="blog-meta mb-10">
                           <li class="admin"> <i class="fa fa-user-o"></i> admin</li>
                           <li class="date"> <i class="fa fa-calendar-check-o"></i> {{ $post->created_at->format('Y-m-d H:i:s') }}</li>
                       </ul>
                       <h3 class="blog-title"><a href="#">{{ $post->title }}</a></h3>
                       <p>{{ $post->body }}</p>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial style2 bg10 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center md-left mb-30">
                <div class="sub-text">Testimonials</div>
                <h2 class="title mb-0 white-color">What are our users saying<br> about us</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="testi-wrap">
                    <div class="item-content">
                        
                        <p>Its Been 4 Weeks Since I Joined {{ config('app.name')}}, I Have Never Missed A Payment, I Highly Recommend This Company To Investors.</p>
                    </div>
                    <div class="testi-content">
                        <
                        <div class="testi-information">
                            <div class="testi-name">David Meyer</div>
                            
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                       
                        <p>My Greatest Joy Is Joining {{ config('app.name')}}, This Company Changed My Perspective About Investments.</p>
                    </div>
                    <div class="testi-content">
                        <div class="image-wrap">
                            <img src="/assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
                        </div>
                        <div class="testi-information">
                            <div class="testi-name">Grace Blunt</div>
                            
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                       
                        <p>This Company Is The Best, My Family And I Are Very Thankful To You Guys.</p>
                    </div>
                    <div class="testi-content">
                        
                        <div class="testi-information">
                            <div class="testi-name">Ansu George</div>
                            
                        </div>
                    </div>
                </div>
                <div class="testi-wrap">
                    <div class="item-content">
                        
                        <p>If You Need An Investment Company That Has The Interest Of Its Clients At Heart, Then You Are At The Right Place.</p>
                    </div>
                    <div class="testi-content">
                       
                        <div class="testi-information">
                            <div class="testi-name">Angelina Davis</div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->
@endsection