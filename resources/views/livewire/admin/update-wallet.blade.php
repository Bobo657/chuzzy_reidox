<div class="modal fade" wire:ignore.self id="edit-wallet-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">Update Wallet</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Wallet Name</label>
                    <div class="input-group mb-3">                                 
                        <input type="text" class="form-control"  wire:model.defer="name"  />
                        @error('name')
                            <span  class="text-danger col-12">{{ $message }}</span> 
                        @enderror      
                    </div>                           
                </div><!--end form-group--> 

                <div class="form-group">
                    <label for="address">Wallet Address</label>
                    <div class="input-group mb-3">                                 
                        <input type="text" class="form-control"  wire:model.defer="address"  />
                        @error('address')
                            <span  class="text-danger col-12">{{ $message }}</span> 
                        @enderror      
                    </div>                           
                </div><!--end form-group-->

                @if ($photo)
                    Photo Preview:
                    <img class="col-md-12" src="{{ $photo->temporaryUrl() }}">
                @endif
                <div class="form-group">
                    <label class="form-label" for="default-06">Barcode Upload</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input type="file" wire:model="photo" class="custom-file-input">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                       
                    </div>
                    @error('photo') 
                        <small  class="text-danger"><i>{{ $message }}</i></small> 
                    @enderror
                </div> 

            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
               
                <button type="button" wire:click.prevent="update()" class="btn btn-de-primary btn-sm">
                Save</button>
              
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
