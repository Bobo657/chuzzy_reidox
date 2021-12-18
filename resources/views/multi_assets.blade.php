@extends('layouts.website')
@section('title', 'Multi Assets')
@section('content')
<!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Multi Assets</h2>
            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">Multi Assets</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <section class="feature-section section-gap">
        <div class="container">
            <div class="feature-text-block with-absolute-image">
                <div class="section-title-two mb-20">
                    <span class="title-tag">Multi Assets</span>
                    <h2 class="title">Solutions for modern markets</h2>
                </div>
                
                <p class="mb-30">
                    Multi asset allocation and currency expertise across all liquid asset classes delivered via the following solutions: Balanced Income. In volatile markets, experience matters. We are always aware of the responsibilities involved in investing our clients money. 
                </p>
                <div class="blog-dteails-content">
                    <ul class="post-content-list">
                        <li><i class="fal fa-check"></i>Client-specific</li>
                        <li><i class="fal fa-check"></i>Growth-oriented</li>
                        <li><i class="fal fa-check"></i>Unconstrained total return</li>
                        <li><i class="fal fa-check"></i>Balanced Income</li>
                    </ul>
                </div>
                <br>
                <p class="big-text mb-30">Long-term valuation analysis </p>
                Markets are inefficient. This can lead to assets being mispriced.
                We seek to exploit those inefficiencies in a consistent manner using long-term valuation analysis.
                <div class="absolute-img wow fadeInLeft" data-wow-delay="0.3s" style="background-image: url(/assets/img/features-thumb.jpg);"></div>
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