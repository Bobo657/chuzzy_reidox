<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>

    <div class="row">
        <div class="col-12 col-md-7 col-lg-7"> 
            @livewire('admin.wallet-table')
        </div>

        <div class="col-12 col-md-5 col-lg-5"> 
            @livewire('admin.send-mail')
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4 col-lg-2"> 
            <div class="card overflow-hidden">                                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">                                                                        
                            <span class="h4 fw-bold">{{ number_format($users->count()) }}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Users</h6>                
                        </div><!--end col-->
                        <div class="col-auto">
                            <i class="lab la-accessible-icon display-3 text-secondary position-absolute o-1 translate-middle"></i>
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->                                                               
            </div> <!--end card-->                     
        </div><!--end col-->
        <div class="col-12 col-md-4 col-lg-2"> 
            <div class="card overflow-hidden">                                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">                                                                        
                            <span class="h4 fw-bold">${{ number_format($investments->sum('amount')) }}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11"> Investments </h6>                
                        </div><!--end col-->
                        <div class="col-auto position-reletive">
                            <i class="las la-bed display-3 text-secondary position-absolute o-1 translate-middle"></i>
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->                                                               
            </div> <!--end card-->                     
        </div><!--end col-->
        <div class="col-12 col-md-4 col-lg-3"> 
            <div class="card overflow-hidden">                                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">                                                                       
                            <span class="h4 fw-bold">
                                ${{ number_format($investments->where('status', 'approved')->sum('amount')) }}
                            </span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Approved Investments</h6>            
                        </div><!--end col-->
                        <div class="col-auto">
                            <i class="las la-cut  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->                                                               
            </div> <!--end card-->                     
        </div><!--end col-->
        <div class="col-12 col-md-4 col-lg-2"> 
            <div class="card overflow-hidden">                                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">                                                                        
                            <span class="h4 fw-bold">${{ number_format($withdrawals->sum('amount')) }}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Withdrawals</h6>                
                        </div><!--end col-->
                        <div class="col-auto">
                            <i class="las la-stethoscope  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->                                                               
            </div> <!--end card-->                     
        </div><!--end col-->
        <div class="col-12 col-md-4 col-lg-3"> 
            <div class="card overflow-hidden">                                
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">                                                                        
                            <span class="h4 fw-bold">
                                ${{ number_format($withdrawals->where('status', 'approved')->sum('amount')) }}
                            </span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Approved Withdrawals</h6>                
                        </div><!--end col-->
                        <div class="col-auto">
                            <i class="las la-user-nurse  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->                                                               
            </div> <!--end card-->                     
        </div><!--end col-->
                      
    </div>

    @livewire('admin.post-table')
</div>