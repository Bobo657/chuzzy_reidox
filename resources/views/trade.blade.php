@extends('layouts.website')
@section('title', 'Cryptocurrency Trade')
@section('content')
<!--====== Page Title start ======-->
   
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img5">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Cryptocurrency Trade
                    
                </h1>
                <span class="sub-text">{{ config('app.name') }} presents many options for those who wish to trade and invest in the cryptocurrency market.</span>
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
                            Invest and make good profit
                        </h2>
                        <p class="margin-0 pt-15">A digital asset designed to work as a medium of exchange that uses strong cryptography to secure financial transactions, control the creation of additional units, and to verify the transfer of assets. Growing incredibly in popularity in recent years, cryptocurrencies have become the go-to investment option for many. With an ever-growing selection of cryptocurrencies added to the platform, offering balanced exposure and managed by {{ config('app.name') }} expert investment committee.</p>
                        <p class="margin-0 pt-10">Cryptocurrencies display extremely high volatility, and it is quite common to see double-digit percentage fluctuations within a single day. In a broader view of their longer-term performance, however, the top digital currencies have shown significant overall gains.</p>
                    </div>
                    <!-- Counter Section End -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section End -->
    <div class="rs-services style3 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title mb-60">
                <h2 class="title">
                    Our roadmap for your<br> business success
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/1.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#">24/7 Support</a></h2>
                            <p class="services-txt"> We provide 24/7 customer support through email, Whatsapp and Telegram. Our support representatives are periodically available to elucidate any difficulty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/2.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#">Anonymity</a></h2>
                            <p class="services-txt"> Anonymity and using cryptocurrency as a payment instrument. In the era of electronic money, this is one of the most convenient ways of cooperation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/3.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#">SSL Secured</a></h2>
                            <p class="services-txt"> Comodo Essential-SSL Security encryption confirms that the presented content is genuine and legitimate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-50">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/4.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#"> High reliability</a></h2>
                            <p class="services-txt">We are trusted by a huge number of people. We have high level security system which keeps us secured against any cyber attacks therfore minimizing any possible risks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-50">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/5.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#">Referral Program</a></h2>
                            <p class="services-txt">We are offering a certain level of referral income through our referral program. you can increase your income by simply referring people.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="/assets/images/services/style3/6.png" alt="Services">
                        </div>
                        <div class="services-content">
                            <h2 class="services-title"><a href="#">Quick Withdrawals</a></h2>
                            <p class="services-txt">All withdrawals are treated spontaneously once requested. The minimum withdrawal amount is only $1000 and the maximum limit each day is $500,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    @include('imports.packages')

    <!-- Why Choose Section Start -->
    @include('imports.choose_us')
    <!-- Why Choose Section Start -->

            
@endsection