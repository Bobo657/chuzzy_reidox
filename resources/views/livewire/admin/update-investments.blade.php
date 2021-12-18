<div class="modal fade" wire:ignore.self id="edit-investment-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultSignup">Update Investment Details</h6>
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
                            <label for="duration">Duration</label>
                            <input type="text"  wire:model.defer="duration" class="form-control" />
                            @error('duration') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="subject">Deposit Option</label>
                            <select class="form-control" wire:model.defer="wallet_id"> 
                                @foreach($wallets as $wallet)   
                                <option value="{{ $wallet->id }}"> {{ ucFirst($wallet->name) }}</option> 
                                @endforeach 
                                 <option value="Non compounding profit">Non compounding profit</option>            
                            </select> 
                            @error('wallet_id') 
                                <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="payout">Payout Option</label>
                            <input type="text"  wire:model.defer="payout" class="form-control" />
                             @error('payout') 
                            <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="compounding_status">Compounding Status</label>
                            <select class="form-control" wire:model.defer="compounding_status"> 
                                <option value="active"> active</option> 
                                <option value="inactive"> Inactive</option>          
                            </select> 
                              @error('status') 
                            <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                                   
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="created_at">Date Created</label>
                             <input type="text"  wire:model.defer="created_at" class="form-control" />
                             @error('created_at') 
                            <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="col-md-6">
                        <div class="mb-3">
                            <label for="comp_date">Completion Date</label>
                            <input type="text"  wire:model.defer="comp_date" class="form-control" />
                             @error('comp_date') 
                            <span  class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div> -->
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
                </div>                             
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-de-primary btn-sm">Save changes</button>
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->