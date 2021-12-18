@extends('layouts.website')
@section('title', 'Affliate Scheme')
@section('content')
<!--====== Page Title start ======-->
   
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img5">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Affiliate Scheme
                    
                </h1>
                <span class="sub-text">We reward you when you refferre us to people by paying you a percentage once they make their initial deposit.</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-appointment style1 pt-100 md-pt-70">
        <div class="container">
            <div class="row y-middle mb-60">
                <div class="col-lg-2">
                    <div class="sec-title md-mb-30">
                        <h2 class="title">
                            Level 1
                            <span></span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-10">
                    <p class="desc margin-0 pl-100 md-pl-15">2% instant bonus on each deposit. A minimum of 1 active referred user required to withdraw funds.</p>
                </div>
            </div>                    
        </div>
        <div class="border-section">
            <div class="container">
                <div class="row">
                     <div class="col-lg-2">
                        <div class="sec-title md-mb-30">
                            <h2 class="title">
                                Level 2
                            </h2>
                        </div>
                     </div>
                    <div class="col-lg-10">
                        <p class="desc margin-0 pl-100 md-pl-15">5% instant bonus on each deposit. A minimum of 3 active referred users required to withdraw funds. Automatic 2% increase on investments.</p>
                    </div>
                </div>               
            </div>
        </div>
        
         <div class="border-section">
            <div class="container">
                <div class="row">
                     <div class="col-lg-2">
                        <div class="sec-title md-mb-30">
                            <h2 class="title">
                                Level 3
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <p class="desc margin-0 pl-100 md-pl-15">10% instant bonus on each deposit. A minimum of 5 active referred users required to withdraw funds. Automatic 4% increase on investments.</p>
                    </div>
                </div>               
            </div>
           
        </div>
        
         <div class="border-section">
            <div class="container">
                <div class="row">
                     <div class="col-lg-2">
                    <div class="sec-title md-mb-30">
                        <h2 class="title">
                            Level 4
                        </h2>
                    </div>
                </div>
                <div class="col-lg-10">
                    <p class="desc margin-0 pl-100 md-pl-15">17% instant bonus on each deposit. A minimum of 10 active referred users required to withdraw funds. Automatic 6% increase on investments.</p>
                </div>
            </div>               
                </div>
            </div>
     </div>
    <!-- About Section End -->

    <!-- Why Choose Section Start -->
    @include('imports.choose_us')
    <!-- Why Choose Section Start -->

            
@endsection