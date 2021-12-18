<div class="modal fade" wire:ignore.self id="update-withdrawal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultSignup">Update Withdrawal Details</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control"  wire:model.defer="amount" />
                            @error('amount') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="from">From</label>
                            <input type="text" class="form-control"  wire:model.defer="from" />
                            @error('from') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="wallet_type">Wallet</label>
                            <input type="text" class="form-control"  wire:model.defer="wallet_type" />
                            @error('wallet_type') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select class="form-control" wire:model.defer="status"> 
                                 @foreach(config('app.status') as $stat)   
                                <option value="{{ $stat }}"> {{ ucFirst($stat) }}</option> 
                                @endforeach             
                                            
                            </select> 
                            @error('status') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="created_at">Date</label>
                            <input type="text" class="form-control"  wire:model.defer="created_at" />
                            @error('created_at') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="wallet_address">Wallet Address</label>
                            <input type="text"  wire:model.defer="wallet_address" class="form-control" />
                            @error('wallet_address') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                </div> 
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-de-primary btn-sm">Save changes</button>
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
