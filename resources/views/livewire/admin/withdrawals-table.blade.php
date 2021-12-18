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
                        <li class="breadcrumb-item active">Withdrawals</li>
                    </ol>
                </div>
                <h4 class="page-title">All Withdrawals</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                
                                <th>Amount</th>                                                    
                                <th>Wallet</th>
                                <th>Wallet Address</th>
                                <th>From </th>
                                <th>Status</th>   
                                <th>Date</th>                                              
                                <th class="text-right">Action</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                                @foreach($withdrawals as $withdrawal)
                                <tr>
                                    <td>{{ optional($withdrawal->user)->name }}</td>
                                   
                                    <td>${{ number_format($withdrawal->amount) }}</td>
                                    <td>{{ $withdrawal->wallet_type }}</td>
                                    <td>{{ $withdrawal->wallet_address }}</td> 
                                    <td>{{ $withdrawal->from }}</td>
                                    <td><span class="badge badge-soft-{{ $withdrawal->color }}">{{ $withdrawal->status }}</span></td> 
                                    <td>{{ $withdrawal->created_at->format('d/m/Y') }}</td> 
                                    <td class="text-right">                                                   
                                        <a href="#"  wire:click.prevent="$emitTo('admin.update-withdrawal', 'editWithdrawal', '{{$withdrawal->id}}')">
                                            <i class="las la-pen text-secondary font-18"></i>
                                        </a>
                                        <a href="#" wire:click.prevent="delete({{ $withdrawal->id }})">
                                            <i class="las la-trash-alt text-secondary font-18"></i>
                                        </a>
                                    </td>
                                </tr><!--end tr-->
                                @endforeach                  
                            </tbody>
                        </table>                    
                    </div>    
                                              
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                               
    </div><!--end row-->

    @livewire('admin.update-withdrawal')
</div><!-- container -->