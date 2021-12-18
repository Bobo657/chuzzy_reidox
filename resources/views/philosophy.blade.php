@extends('layouts.website')
@section('title', 'Investment Philosophy')
@section('content')
<!--====== Page Title start ======-->
   
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img5">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Investment Philosophy
                    
                </h1>
                <span class="sub-text"> Managing these risks is paramount to the long-term success of any given strategy.</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="/assets/images/about/about-4.png" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="sec-title">
                        <h2 class="title pb-22">
                            Stategy that focuses on building
                        </h2>
                        <p class="margin-0 pt-15">We believe that systematic mistakes by investors combined with structural and temporal features of markets create security mispricings, extensive empirical evidence supports this belief. Our disciplined and systematic process exploits these mispricings, seeking to build high risk-adjusted return portfolios for our clients.</p>
                        <p class="margin-0 pt-10">{{ config('app.name') }} also recognizes that markets are adaptive, that investment strategies go in and out of favor, and risk or reward relationships change over time. We acknowledge the importance of recognizing shifts in the market environment and knowing the value of different pieces of information at different points in time across global markets. We also know that, at times, even the most sophisticated stock selection attributes will converge towards temporary macro risk trends. </p>
                    </div>
                    <!-- Counter Section End -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section End -->
    @include('imports.strategy')
    <!-- Services Section End -->

    @include('imports.packages')

    <!-- Why Choose Section Start -->
    @include('imports.choose_us')
    <!-- Why Choose Section Start -->      
@endsection