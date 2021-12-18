<div class="modal fade" wire:ignore.self id="add-profit-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">Add User Profit</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                
                <div class="form-group">
                    <label class="" for="date">Date</label>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control"  wire:model.defer="date"  placeholder="2020-02-02"/>
                        @error('date') 
                            <span class="col-md-12 text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                </div>     

                    <div class="form-group">
                        <label class="" for="time">Time</label>
                        <div class="input-group mb-3">
                            <input type="time"  wire:model.defer="time" class="form-control"  placeholder="12:00 PM" />
                            @error('time') 
                                <span class="col-md-12 text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label class="" for="amount">Amount</label>
                        <div class="input-group mb-3">
                            <input type="number" min="0" class="form-control"  wire:model.defer="amount"  />
                            @error('amount') 
                                <span class="col-md-12 text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="" for="type">Profit</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  wire:model.defer="type"  />
                            @error('type') 
                                <span class="col-md-12 text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>

              

            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
               
                <button type="button" wire:click="addProfit" class="btn btn-de-primary btn-sm">
                Save</button>
              
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
