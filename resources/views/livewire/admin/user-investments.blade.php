<table class="table mb-0">

    <thead class="thead-light">
        <tr>
            <th>Wallet</th>
            <th>Plan</th>
            <th>Duration</th>                                                    
            <th>Status</th>
            <th>Amount</th>
            <th>Payout</th>
            <th>Date</th>
            <th></th>
        </tr><!--end tr-->
    </thead>

    <tbody>
        @foreach($investments as $investment)
        <tr>
            <td>{{ optional($investment->wallet)->name }}</td>
            <td>{{ optional($investment->plan)->name }}</td>
            <td>{{ $investment->duration }}Months</td>
            <td><span class="badge badge-soft-{{ $investment->color }}">{{ $investment->status }}</span></td>
            <td>${{ number_format($investment->amount) }}</td>  
            <td>{{ $investment->payout }}</td>
            <td>{{ $investment->created_at->format('d/m/Y') }}</td>                                      
            <td>                                                       
                <a href="#"><i class="las la-pen text-warning font-18"></i></a>
                <a href="#" wire:click.prevent="delete({{ $investment->id }})">
                    <i class="las la-trash-alt text-danger font-18"></i>
                </a>
            </td>
        </tr><!--end tr-->
        @endforeach
    </tbody>

</table>      
