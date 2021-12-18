<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between mb-3">
                <div class="align-self-center">
                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#makeDeposit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-navigation align-self-center icon-xs me-2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>Make Deposit</button>
                   
                    <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#withdrawal-form"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download align-self-center icon-xs me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>Make Withdrawal</button>
                    @livewire('user.make-withdrawal')
                    
                </div><!--end /div-->
               
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
                                        <p class="mb-0 met-user-name-post">Registered on {{ auth()->user()->created_at->format('F d, Y') }}</p>                           
                                    </div>
                                </div>                                                
                            </div><!--end col-->
                            
                            <div class="col-lg-4 ms-auto align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : {{ auth()->user()->phone }}</li>
                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : {{ auth()->user()->email }}</li>
                                                   
                                </ul>
                               
                            </div><!--end col-->
                            <div class="col-lg-4 align-self-center">
                                <ul class="list-unstyled personal-detail mb-0">
                                    <li class=""><i class="las la-globe mr-2 text-secondary font-22 align-middle"></i> <b> Country </b> : {{ auth()->user()->country }}</li>
                                    <li class="mt-2"><i class="las la-calendar text-secondary font-22 align-middle mr-2"></i> <b> Last Update </b> : {{ auth()->user()->created_at->format('d-m-Y H:i:s') }}</li>
                                                   
                                </ul>                                              
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end f_profile-->                                                                                
                </div><!--end card-body--> 
            </div><!--end card-->
        </div><!--end col-->
    </div>

    <div class="row">                        
        <div class="col-lg-4">
            @livewire('user.update-details')
        </div><!--end col-->
        <div class="col-lg-4">
            @livewire('user.change-password')
        </div><!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Notification Setting</h4>             
                        </div><!--end col-->                                       
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->
                <div class="card-body">
                    @livewire('user.picture-upload', ['col' => 'passport', 'label' => 'Passport'])  

                    @livewire('user.picture-upload', ['col' => 'idfront', 'label' => 'ID Front'])

                    @livewire('user.picture-upload', ['col' => 'idback', 'label' => 'ID Back'])
                    
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div>

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
