<div class="rs-pricing style1 pt-100 pb-100 md-pt-70 md-pb-70" id="packages">
        <div class="container">
           <div class="sec-title text-center mb-55 md-mb-30">
               <h2 class="title title2">
                   Pricing plans 
               </h2>
           </div>
           <div class="row">
                @foreach(Cache::get('plans') as $plan)
               <div class="col-lg-3 col-md-6 md-mb-30">
                   <div class="pricing-table {{ $plan->id == '2' || $plan->id == '4' ? '' : 'white-bg'}} ">
                        <div class="pricing-table-header">
                            <h3 class="table-title">Basic Plan</h3>
                        </div>
                       <div class="pricing-icon mb-40">
                           <img src="assets/images/pricing/style1/1.png" alt="">
                       </div>
                        <div class="pricing-table-price">
                            <div class="pricing-table-bags">
                                <span class="pricing-currency">$</span>
                                <span class="table-price-text" style="font-size : 50px;">{{ $plan->min}}</span>
                                <span class="table-period"> Min</span>
                            </div>
                        </div>
                       <div class="pricing-table-body">
                           <ul>
                                <li><i class="fa fa-check"></i><span>{{ $plan->desc }}</span></li>
                                <li><i class="fa fa-check"></i><span>Affiliate Com {{ $plan->support }}%</span></li>
                                <li><i class="fa fa-check"></i><span>{{ $plan->roi }}% ROI</span></li>
                                <li><i class="fa fa-check"></i><span>
                                    @if($plan->max > 44999)
                                        Unlimited Maximum
                                    @else
                                        ${{ number_format($plan->max) }} Maximum
                                    @endif
                                </span></li>
                           </ul>
                       </div>
                       <div class="btn-part">
                           <a class="readon price {{ $plan->id == '2' || $plan->id == '4' ? '' : 'price2'}} " href="/login">Invest Now</a>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
        </div>
    </div>
