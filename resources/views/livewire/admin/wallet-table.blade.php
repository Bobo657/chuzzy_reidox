<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">                      
                <h4 class="card-title">Wallet Table</h4>             
            </div><!--end col--> 
             <div class="col-auto">
               <button class="btn btn-outline-light btn-sm px-4" data-bs-toggle="modal" data-bs-target="#add-wallet-form">+ Add New</button>    
             </div> <!--end col-->                                        
        </div>  <!--end row-->                                  
    </div><!--end card-header-->
    <div class="card-body">        
        <div class="table-responsive">
            <table class="table ">
                <thead class="thead-light">
                <tr>
                    <th>Wallet</th>
                    <th>Address</th>
                    <th>Transactions</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wallets as $wallet)
                <tr>
                    <td>
                        <img src="{{ optional($wallet)->url }}" alt="" class="rounded-circle thumb-sm me-1"> {{ $wallet->name }}
                    </td>
                    <td>{{ $wallet->address }}</td>
                    <td>{{ $wallet->transactions->count() }} Transactions</td>
                    <td>{{ $wallet->created_at->format('d/m/Y') }}</td>
                    <td>                                                       
                        <a href="#" wire:click.prevent="$emitTo('admin.update-wallet', 'editWallet', {{ $wallet->id }})">
                            <i class="las la-pen text-secondary font-16"></i>
                        </a>
                        @if($wallet->transactions->count() == 0)
                        <a href="#" wire:click.prevent="delete({{ $wallet->id }})">
                            <i class="las la-trash-alt text-secondary font-16"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table><!--end /table-->
        </div><!--end /tableresponsive-->
        
    </div><!--end card-body-->

    @livewire('admin.add-wallet')
    @livewire('admin.update-wallet')
</div>
