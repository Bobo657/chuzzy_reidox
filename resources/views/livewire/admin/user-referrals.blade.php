<div class="modal fade" wire:ignore.self id="user-ref-list" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">{{ $name }} Referral List</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                @if($uplink)
                <table id="datatable" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th colspan="4">Uplink</th>
                        
                    </tr><!--end tr-->
                    </thead>

                    <tbody>
                    <tr>
                        <td>{{ $uplink->name }}</td>
                        <td>{{ $uplink->email }}</td>
                        <td>{{ $uplink->country }}</td>
                        <td>{{ $uplink->created_at->format('M d, Y')}}</td>                        
                    </tr><!--end tr-->
                                             
                    </tbody>
                </table>
                @endif
                @if($referrals)
                <table id="datatable" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th colspan="4">Downlink</th>
                        
                    </tr><!--end tr-->
                    </thead>

                    <tbody>
                    @foreach($referrals as $ref)
                    <tr>
                         <td>{{ $ref->name }}</td>
                        <td>{{ $ref->email }}</td>
                        <td>{{ $ref->country }}</td>
                        <td>{{ $ref->created_at->format('M d, Y')}}</td>                           
                    </tr><!--end tr-->
                        @endforeach                       
                    </tbody>
                </table>
               @endif

            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
              
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->

