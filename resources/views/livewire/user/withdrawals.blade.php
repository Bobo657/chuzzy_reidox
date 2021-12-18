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
                        <li class="breadcrumb-item active">Withdrawals</li>
                    </ol>
                </div>
                <h4 class="page-title">All Withdrawals</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-6 col-xl-6">
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
                        <button type="button" data-bs-toggle="modal" data-bs-target="#withdrawal-form" class="btn btn-soft-primary btn-sm">Click to withdraw</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        <div class="col-lg-6 col-xl-6">
            <div class="card">                                        
                <div class="card-body"> 
                    <span class="text-muted fw-semibold">Non Compounding Profit</span>  
                    <div class="row">
                        <div class="col">
                            <h2 class="font-18 my-1">${{ number_format(Auth::user()->non_profit) }}</h2> 
                        </div> <!--end col-->
                        <div class="col-auto">
                            <span class="fw-semibold font-15"><mark>CP</mark></span>
                        </div> <!--end col-->
                    </div> <!--end row-->
                    <div class="d-grid">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#withdrawal-form" class="btn btn-soft-primary btn-sm">Click to withdraw</button>  
                    </div>                                                                                                                
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                               
                                <th>Amount</th>                                                    
                                <th>Wallet</th>
                                <th>Wallet Address</th>
                                <th>From </th>
                                <th>Status</th>   
                                <th>Date</th>                                              
                               
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                                @foreach($withdrawals as $withdrawal)
                                <tr>
                                    <td>${{ number_format($withdrawal->amount) }}</td>
                                    <td>{{ $withdrawal->wallet_type }}</td>
                                    <td>{{ $withdrawal->wallet_address }}</td> 
                                    <td>{{ $withdrawal->from }}</td>
                                    <td><span class="badge badge-soft-{{ $withdrawal->color }}">{{ $withdrawal->status }}</span></td> 
                                    <td>{{ $withdrawal->created_at->format('d/m/Y') }}</td> 
                                   
                                </tr><!--end tr-->
                                @endforeach                  
                            </tbody>
                        </table>                    
                    </div>    
                                              
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                               
    </div><!--end row-->

    @livewire('user.make-withdrawal')
</div><!-- container -->