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
                        <li class="breadcrumb-item active">Investments</li>
                    </ol>
                </div>
                <h4 class="page-title">All Investments</h4>
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
                                <th>Plan</th>
                                <th>Amount</th> 
                                <th>Top-ups</th>                                                    
                                <th>Wallet</th>
                                <th>Duration</th>
                                <th>Payout</th>
                                <th>Status</th>   
                                <th>Date</th>                                              
                                <th class="text-right">Action</th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                                @foreach($investments as $investment)
                                <tr>
                                    <td>{{ optional($investment->user)->name }}</td>
                                    <td>@if(!$investment->investment_id)
                                        {{ optional($investment->plan)->name }}
                                        @else
                                        Top Up
                                        @endif
                                    </td>
                                    <td>${{ number_format($investment->amount) }}</td>
                                    <td>${{ number_format($investment->increase) }}</td>
                                    <td>{{ optional($investment->wallet)->name }}</td>
                                    <td>@if(!$investment->investment_id)
                                        {{ $investment->duration }}Months 
                                        @endif
                                    </td> 
                                    <td>@if(!$investment->investment_id){{ $investment->payout }}@endif</td>
                                    <td><span class="badge badge-soft-{{ $investment->color }}">{{ $investment->status }}</span></td> 
                                    <td>{{ $investment->created_at->format('d/m/Y') }}</td> 
                                    <td class="text-right">                                                   
                                        <a href="#"  wire:click.prevent="$emitTo('admin.update-investments', 'editInvestment', '{{$investment->id}}')">
                                            <i class="las la-pen text-secondary font-18"></i>
                                        </a>
                                        <a href="#" wire:click.prevent="delete({{ $investment->id }})">
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

    @livewire('admin.update-investments')
</div><!-- container -->