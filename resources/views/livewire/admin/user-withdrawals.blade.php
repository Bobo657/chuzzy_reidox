<table class="table mb-0">

    <thead class="thead-light">
        <tr>
            <th>Wallet</th>
            <th>Address</th>
            <th>From</th>                                                    
            <th>Status</th>
            <th>Amount</th>
            <th>Date</th>
            <th></th>
        </tr><!--end tr-->
    </thead>

    <tbody>
        @foreach($withdrawals as $withdraw)
        <tr>
            <td>{{ $withdraw->wallet_type}}</td>
            <td>{{ $withdraw->wallet_address}}</td>
            <td>{{ $withdraw->from}}</td>
            <td><span class="badge badge-soft-{{ $withdraw->color }}">{{ $withdraw->status }}</span></td>
            <td>${{ number_format($withdraw->amount) }}</td>  
            <td>{{ $withdraw->created_at->format('d/m/Y') }}</td>                                      
            <td>                                                       
                <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                <a href="#" wire:click.prevent="delete({{ $withdraw->id }})">
                    <i class="las la-trash-alt text-secondary font-18"></i>
                </a>
            </td>
        </tr><!--end tr-->
        @endforeach
    </tbody>

</table>                                 