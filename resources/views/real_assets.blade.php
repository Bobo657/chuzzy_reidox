@extends('layouts.website')
@section('title', 'Real Assets')
@section('content')
<!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Real Assets</h2>
            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">Real Assets</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <section class="feature-section section-gap">
        <div class="container">
            <div class="feature-text-block with-absolute-image">
                <div class="section-title-two mb-20">
                    <span class="title-tag">Real Assets</span>
                    <h2 class="title">Integrated Solutions</h2>
                </div>
                
                <p class="mb-30">
                   We believe we can offer clients integrated solutions to optimize the diversification of client portfolios, whether that be in targeting access-restricted private equity funds or niche real estate funds. We also pride ourselves on offering innovative new hybrid products to our international clients in key markets where we already have a strong presence, including expanded offerings in Brazil, Canada and Japan.
                </p>

                <p>{{ config('app.name')}} Asset Management's Real Estate & Private Markets business is one of the largest growing asset managers in real assets worldwide, By combining the joint expertise of over 100 talented people working across Direct Real Estate and Direct Infrastructure as well as Multi-Manager Solutions in Real Estate, Infrastructure and Private Equity.</p>
                <div class="absolute-img wow fadeInLeft" data-wow-delay="0.3s" style="background-image: url(/assets/img/features-thumb.jpg);"></div>
            </div>

            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-1.png" alt="Icon">
                        </div>
                        <h4 class="title">Sustainable Investing</h4>
                        <p>We pride ourselves on our commitment to sustainable investing. Our investment process involves rigorous vetting of the environmental, social and governance (ESG) aspects of the asset. Throughout the investment's life, we continue to monitor the asset's ESG impact. </p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-2.png" alt="Icon">
                        </div>
                        <h4 class="title">Solutions</h4>
                        <p>Our capabilities reach across the risk / return spectrum, ranging from core to value-add and opportunistic strategies. We offer clients both direct real estate and infrastructure equity and debt investments or indirect exposure to leading real estate, infrastructure, and private equity managers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-2.png" alt="Icon">
                        </div>
                        <h4 class="title">Infrastructure</h4>
                        <p>Our Infrastructure platform invests globally across the key infrastructure sectors including energy, utilities, transportation, telecommunications and social infrastructure. Existing capabilities include closed end direct equity funds that invest in traditional, long-life infrastructure assets in developed countries.</p>
                      
                    </div>
                </div>
            </div>
            
        </div>
    </section>

 
@endsection