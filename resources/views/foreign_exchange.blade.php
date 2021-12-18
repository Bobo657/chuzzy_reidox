@extends('layouts.website')
@section('title', 'Foreign Exchange')
@section('content')
<!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Foreign Exchange</h2>
            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">Foreign Exchange</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <section class="feature-section section-gap">
        <div class="container">
            <div class="feature-text-block with-absolute-image">
                <div class="section-title-two mb-20">
                    <span class="title-tag">CORE FEATURES</span>
                    <h2 class="title">Global trading in foreign exchange</h2>
                </div>
                <p class="big-text mb-30"> Our knowledge of computers will help us </p>
                <p class="mb-30">
                    {{ config('app.name')}} offers several products for trading in foreign exchange. These include spot deals, forward contracts, currency swaps and FX option strategies. {{ config('app.name')}} solutions protect clients from adverse exchange rate movements in order to protect their margins.
                </p>

                <p >
                    {{ config('app.name')}} covers all time zones and offers competitive rates when trading in all major currency pairs. Customers are also provided with market updates and proactive recommendations concerning currency movements and hedging strategies. Customers are also given assess to view there trades whenever they wish to.
                </p>
                <div class="absolute-img wow fadeInLeft" data-wow-delay="0.3s" style="background-image: url(/assets/img/features-thumb.jpg);"></div>
            </div>
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-1.png" alt="Icon">
                        </div>
                        <h4 class="title">Alpha Sources</h4>
                        <p>We diversify by time horizon, and by exploiting the full opportunity set: credit beta, credit sector, choice of security, duration, yield curve, and country allocation.</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-2.png" alt="Icon">
                        </div>
                        <h4 class="title">Research Process</h4>
                        <p>To meet the demands of a globally integrated world, our robust research process connects our global overview with the insight of regional specialists.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-2.png" alt="Icon">
                        </div>
                        <h4 class="title">Income strategies</h4>
                        <p>Single-sector strategies such as government and corporate bond portfolios. Multi-sector strategies, including core and core plus bond</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== pricing Section Start ======-->
    <section class="pricing-section section-gap soft-blue-bg" id="investment">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title with-right-border mb-50">
                        <span class="title-tag">plans</span>
                        <h2 class="title">Here is our investment plans</h2>
                    </div>
                </div>
                
            </div>
            <div class="tab-content" id="pricingOneTabContent">
                <div class="tab-pane fade active show" id="monthly-item" role="tabpanel" tabindex="-1">
                    <div class="row justify-content-center">
                        @foreach(Cache::get('plans') as $plan)
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url(/assets/img/plans-thumb.jpg);">
                                <p class="plan-name">{{ $plan->name }}</p>
                                <h4 class="price"> <span>${{ number_format($plan->min) }}</span></h3>
                                <span class="plan-duration">Min</span>
                                <p>We translate your dream into reality.</p>
                                <ul>
                                <li><i class="fal fa-angle-right"></i> {{ $plan->desc }}</li>
                                <li><i class="fal fa-angle-right"></i> {{ $plan->roi }}% ROI</li>
                                <li><i class="fal fa-angle-right"></i>Affiliate Com {{ $plan->support }}%</li>
                                <li><i class="fal fa-angle-right"></i> ${{ number_format($plan->max) }} Maximum</li>
                            </ul>
                               
                                <a class="plans-btn" href="{{ route('user.investments')}}">Invest Now</a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--====== pricing Section Ends ======-->
 
@endsection