<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User Admin</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between mb-3">
                <div class="align-self-center">
                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#makeDeposit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-navigation align-self-center icon-xs me-2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>Make Deposit</button>
                    <!-- Modal -->
                                                    

                    <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#withdrawal-form"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download align-self-center icon-xs me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Make Withdrawal</button>
                    @livewire('user.make-withdrawal')<!--end modal-->
                </div><!--end /div-->
                <div class="media">
                    <img src="/admin/images/logos/btc.png" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">     
                        <p class="mb-1 text-muted">Capital</p>                                                       
                        <h5 class="mt-0 text-dark mb-1">{{ number_format(auth()->user()->capital) }} USD</h5>                                                                                                      
                    </div><!--end media-body-->
                </div><!--end media-->
            </div><!--end /div-->
        </div><!--end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="met-profile">
                        <div class="row">
                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                <div class="met-profile-main">
                                    <div class="met-profile-main-pic">
                                        <img src="{{ auth()->user()->photo() }}" alt="" height="110" class="rounded-circle">
                                        <span class="met-profile_main-pic-change" data-bs-toggle="modal" data-bs-target="#uploadPhoto">
                                            <i class="fas fa-camera"></i>
                                        </span>
                                    </div>
                                    <div class="met-profile_user-detail">
                                        <h5 class="met-user-name">{{ auth()->user()->name }}</h5>                                                        
                                        <p class="mb-0 met-user-name-post">{{ auth()->user()->email }}</p>                                                        
                                    </div>
                                </div>                                                
                            </div><!--end col-->
                            
                            <div class="col-lg-4 ms-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : {{ auth()->user()->phone }}</li>
                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : {{ auth()->user()->email }}</li>
                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Referal Link </b> : 
                                        <a href="{{ route('register')}}/?ref={{ Auth::id()+400 }}" class="font-14 text-primary">{{ route('register')}}/?ref={{ Auth::id()+400 }}</a> 
                                    </li>                                                   
                                </ul>
                               
                            </div><!--end col-->
                           
                        </div><!--end row-->
                    </div><!--end f_profile-->                                                                                
                </div><!--end card-body--> 
            </div><!--end card-->
        </div><!--end col-->
    </div>

    <div class="mb-3" style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
        <div style="height:40px; padding:0px; margin:0px; width: 100%;">
            <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
        </div>
        <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-3"> 
                            <div id="ana_device" class="apex-charts"></div>
                        </div><!--end col-->
                        <div class="col-md-9 align-self-center"> 
                            <div class="row">
                                <div class="col-12 col-lg-4 col-xl"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4">${{ number_format(Auth::user()->non_profit) }}</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0">Non Compounding Profit
                                                    </h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-4 col-xl"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4">${{ number_format(Auth::user()->referral_profit ) }}</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0">Bonus</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-4 col-xl"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4">${{ number_format(Auth::user()->c_profit) }}</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0">Compounding Profit</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->                  
                            </div><!--end row--> 
                            <div class="calculator-block mt-2">                        
                                <div class="calculator-body">                                                      
                                    <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->    
                    
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

        <div class="col-lg-4">
            <script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
<coingecko-coin-converter-widget  coin-id="bitcoin" currency="usd" background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>         
        </div> <!-- end col -->
    </div><!--end row--> 

    <div class="row">
        <script src="https://widgets.coingecko.com/coingecko-coin-heatmap-widget.js"></script>
        <coingecko-coin-heatmap-widget  height="400" locale="en"></coingecko-coin-heatmap-widget>
    </div> 

    <div class="row">
        <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
<coingecko-coin-compare-chart-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" locale="en"></coingecko-coin-compare-chart-widget>
    </div>


    @section('scripts')
    <script src="/admin/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/pages/crypto-exchange.init.js"></script>
    @endsection


     @livewire('user.make-deposit')

    <div class="modal fade" wire:ignore.self id="uploadPhoto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0">Upload Picture</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    @livewire('user.picture-upload', ['col' => 'photo', 'label' => 'Profile Picture'])
                </div>
            </div>
        </div>
    </div>
</div>
