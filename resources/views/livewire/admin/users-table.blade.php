<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <h4 class="page-title">Users</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">                                                                        
                            <span class="h5">{{ $users->count()}}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Total Users</h6>                
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->
            </div><!--end card--> 
        </div><!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">                                                                        
                            <span class="h5">{{ $users->where('status', true)->count()}}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Active Users</h6>                
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->
            </div><!--end card--> 
        </div><!--end col-->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col text-center">                                                                        
                            <span class="h5">{{ $users->where('email_verified_at', '!=', null)->count()}}</span>      
                            <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Verified Users</h6>                
                        </div><!--end col-->
                    </div> <!-- end row -->
                </div><!--end card-body-->
            </div><!--end card--> 
        </div><!--end col-->
    </div><!--end row-->    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">                      
                            <h4 class="card-title">Regsistered Users</h4>             
                        </div><!--end col-->                                       
                    </div>  <!--end row-->                                  
                </div><!--end card-header-->
                <div class="card-body">    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-light">
                            <tr>
                                <th>Users</th>
                                <th>Email</th>
                                <th>Verified</th>
                                <th>Referrals</th>
                                <th>Status</th>
                                <th>Country</th>
                                <th>Ref Bonus</th>
                                <th>Capital</th>
                                <th>Comp Profit</th>
                                <th>Non Comp Profit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td><a href="#" wire:click.prevent="$emitTo('admin.user-referrals', 'getReferrals', '{{$user->id}}')" >{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    @if($user->email_verified_at) 
                                    <a href="#"><i class="ti ti-user-check text-info font-16"></i></a>
                                    @else
                                    <a href="#"><i class="ti ti-user-x text-warning font-16"></i></a>
                                    @endif
                                </td>
                                <td class="text-center">{{ number_format($user->referals->count()) }}</td>
                                <td>
                                    <a href="#" wire:click.prevent="change_status({{$user->id}})">
                                        @if($user->status) 
                                        <span class="badge badge-soft-success">Active</span>
                                        @else
                                        <span class="badge badge-soft-danger">Disabled</span>
                                        @endif
                                    </a>
                                </td>
                                <td>{{ $user->country }}</td>
                                <td class="text-center">${{ number_format($user->referral_profit) }}</td>
                                <td class="text-center">${{ number_format($user->capital) }}</td>
                                <td class="text-center">${{ number_format($user->c_profit) }}</td>
                                <td class="text-center">${{ number_format($user->non_profit) }}</td>
                                <td class="text-right">                                                       
                                    <div class="btn-group ms-1">
                                    <button type="button" class="btn btn-sm btn-de-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        More<i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="#" wire:click.prevent="$emitTo('admin.update-user-info', 'editUser', '{{$user->id}}')">
                                        Edit User</a>
                                        <a class="dropdown-item" href="{{ route('user.profit', ['id' => $user->id])}}" >
                                        Profit Statement</a>
                                        <a class="dropdown-item" href="#" wire:click.prevent="$emitTo('admin.user-investments', 'showInvestments', '{{$user->id}}')">Investments</a>
                                        <a class="dropdown-item" href="#" wire:click.prevent="$emitTo('admin.user-withdrawals', 'shoWithdrawals', '{{$user->id}}')">Withdrawals</a>
                                        <a class="dropdown-item" href="#" wire:click.prevent="delete({{ $user->id }})">Delete</a>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                   
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div><!--end row-->


    @livewire('admin.update-user-info') 

    @livewire('admin.user-referrals') 

    <div class="modal fade" wire:ignore.self id="showUserWithdrawals" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalDefaultSignup">User Withdrawals</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    @livewire('admin.user-withdrawals')
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
    
    <div class="modal fade" wire:ignore.self id="showUserInvestments" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="exampleModalDefaultSignup">User Investments</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body">
                    @livewire('admin.user-investments')
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div><!--end modal-->
</div>
