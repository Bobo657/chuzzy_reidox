@extends('layouts.website')
@section('title', 'Sustainability')
@section('content')
<!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Sustainability</h2>
            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">Sustainability</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <section class="feature-section section-gap">
        <div class="container">
            <div class="feature-text-block with-absolute-image">
                 <div class="section-title-two mb-20">
                    
                    <h2 class="title">Sustainable investing</h2>
                </div>
                <p class="big-text mb-30">Redefining the way you think</p>
                
                <p class="mb-30">
                 Every day, wealthy investors make spending, philanthropic and even career decisions to help make the world a better place. But when it comes to investing, are portfolios aligned to personal values? Can my investments make an impact to the world? What if you could do well financially while doing good in the world? With sustainable investing, you can invest in ways that reflect your values without compromising the opportunity to get attractive returns on your money.
                </p>

                <p>Sustainable investing is a way of investing that aims to give you the opportunity for both strong returns while staying true to your values. Unlike traditional investing, sustainable investing focuses on doing good in the world. You also don't miss out on the returns you might expect from traditional investments, in fact, evidence backs this up.</p>
                <div class="absolute-img wow fadeInLeft" data-wow-delay="0.3s" style="background-image: url(/assets/img/features-thumb.jpg);"></div>
            </div>

            <div class="row service-items justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-1.png" alt="Icon">
                        </div>
                        <h4 class="title">How can I get started?</h4>
                        <p>With {{ config('app.name')}} you have lots of opportunities to invest sustainably – for the good of your finances and the world. Get off to a great start. Our {{ config('app.name')}} Sustainable Investing portfolio makes it easy to get started. It mirrors our award-winning portfolio approach but replaces conventional assets with sustainable ones.</p>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item-seven mt-30">
                        <div class="icon">
                            <img src="/assets/img/icon/services-2.png" alt="Icon">
                        </div>
                        <h4 class="title">What I can do for my money?</h4>
                        <p>Think investing sustainably means missing out on growing your money? Think again. Evidence shows sustainable investment returns are comparable to what you can expect from conventional ones For example, a review of academic research found that investing sustainably improves returns or doesn't harm them . So it's little surprise the global sustainable investment market is growing.</p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

    @include('imports.packages')
 
@endsection