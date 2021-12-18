<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Investments</li>
                    </ol>
                </div>
                <h4 class="page-title">Investments</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    
    <div class="row">
        <div class="col-lg-3 col-xl-3">
            <div class="card">                                        
                <div class="card-body"> 
                    <span class="text-muted fw-semibold">Capital</span>  
                    <div class="row">
                        <div class="col">
                            <h2 class="font-18 my-1">${{ number_format(Auth::user()->capital) }}</h2> 
                        </div> <!--end col-->
                        <div class="col-auto">
                            <span class="fw-semibold font-15"><mark>CP</mark></span>
                        </div> <!--end col-->
                    </div> <!--end row-->
                    <div class="d-grid">
                        <button data-bs-toggle="modal" data-bs-target="#makeDeposit" type="button" class="btn btn-soft-primary btn-sm">Click to invest</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        <div class="col-lg-3 col-xl-3">
            <div class="card">                                        
                <div class="card-body"> 
                    <span class="text-muted fw-semibold">Referral Bonus</span>  
                    <div class="row">
                        <div class="col">
                            <h2 class="font-18 my-1">${{ number_format(Auth::user()->referral_profit) }}</h2> 
                        </div> <!--end col-->
                        <div class="col-auto">
                            <span class="fw-semibold font-15"><mark>RB</mark></span>
                        </div> <!--end col-->
                    </div> <!--end row-->
                    <div class="d-grid">
                        <button data-bs-toggle="modal" data-bs-target="#makeDeposit" type="button" class="btn btn-soft-primary btn-sm">Click to invest</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        <div class="col-lg-3 col-xl-3">
            <div class="card">                                        
                <div class="card-body"> 
                    <span class="text-muted fw-semibold">Compounding Profit</span>  
                    <div class="row">
                        <div class="col">
                            <h2 class="font-18 my-1">${{ number_format(Auth::user()->c_profit) }}</h2> 
                        </div> <!--end col-->
                        <div class="col-auto">
                            <span class="fw-semibold font-15"><mark>CPR</mark></span>
                        </div> <!--end col-->
                    </div> <!--end row-->
                    <div class="d-grid">
                        <button data-bs-toggle="modal" data-bs-target="#makeDeposit" type="button" class="btn btn-soft-primary btn-sm">Click to invest</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        <div class="col-lg-3 col-xl-3">
            <div class="card">                                        
                <div class="card-body"> 
                    <span class="text-muted fw-semibold">Non Compounding Profit</span>  
                    <div class="row">
                        <div class="col">
                            <h2 class="font-18 my-1">${{ number_format(Auth::user()->non_profit) }}</h2> 
                        </div> <!--end col-->
                        <div class="col-auto">
                            <span class="fw-semibold font-15"><mark>NCP</mark></span>
                        </div> <!--end col-->
                    </div> <!--end row-->
                    <div class="d-grid">
                        <button data-bs-toggle="modal" data-bs-target="#makeDeposit" type="button" class="btn btn-soft-primary btn-sm">Click to invest</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>

       
    </div><!--end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Transaction History</h4>                      
                        </div><!--end col-->
                        <div class="col-auto"> 
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Today<i class="las la-angle-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                </div>
                            </div>               
                        </div><!--end col-->
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->      
                <div class="card-body">
                    <div class="table-responsive dash-social">
                        <table id="datatable" class="table table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>Plan</th>
                               <th>Amount</th> 
                                <th>Top Ups</th>                                                     
                                <th>Wallet</th>
                                <th>Duration</th>
                                <th>Payout</th>
                                <th>Status</th>   
                                <th>Date</th> 
                                <th></th>     
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                               @foreach($investments as $investment)
                                <tr>
                                    <td>
                                        @if(!$investment->investment_id)
                                            {{ optional($investment->plan)->name }}
                                        @else
                                            Top Up
                                        @endif
                                    </td>
                                    <td>${{ number_format($investment->amount) }} 
                                    </td>
                                     <td>${{ number_format($investment->increase) }}</td>
                                    <td>{{ optional($investment->wallet)->name }}</td>
                                    <td>
                                        @if(!$investment->investment_id)
                                        {{ $investment->duration }}Months
                                        @endif
                                    </td> 
                                    <td>@if(!$investment->investment_id){{ $investment->payout }}@endif</td>
                                    <td>
                                        <span class="badge badge-soft-{{ $investment->color }}">
                                            {{ $investment->status }}
                                        </span>
                                    </td> 
                                    <td>{{ $investment->created_at->format('d/m/Y') }}</td> 
                                    <td class="text-center"> 

                                         @if(!$investment->investment_id && $investment->status == 'approved')
                                        <a href="#" wire:click.prevent="$emitTo('user.top-investment', 'topInvestment', '{{$investment->id}}')">
                                            <i class="text-secondary" data-feather="chevrons-right"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr><!--end tr-->  
                                @endforeach                            
                            </tbody>
                        </table>                    
                    </div> 
                                                 
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div><!--end col-->
    </div><!--end row-->  
        @livewire('user.make-deposit')    
        @livewire('user.top-investment')       
</div>    
