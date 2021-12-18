 <div class="modal fade" wire:ignore.self id="editUserInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultSignup">Update User Info</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="auth-page">
                    <div class="auth-card">
                        <div class="">
                            <div class="px-3">                                
                            
                                <div class="form-group">
                                    <label for="username">Full Name</label>
                                    <div class="input-group mb-3">                                 
                                        <input type="text" class="form-control" id="full" placeholder="Enter Full name" wire:model.defer="name" />
                                        @error('name') 
                                            <span  class="text-danger col-12">{{ $message }}</span> 
                                        @enderror      
                                    </div>
                                                                  
                                </div><!--end form-group--> 

                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="useremail" placeholder="Enter Email" wire:model.defer="email" />
                                        @error('email') 
                                            <span  class="text-danger col-12">{{ $message }}</span> 
                                        @enderror
                                    </div>                                    
                                </div><!--end form-group-->
    
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>                                            
                                    <div class="input-group mb-3">                                    
                                        <input type="text" class="form-control" id="phone" placeholder="Enter phone number" wire:model.defer="phone" />
                                        @error('phone') 
                                            <span  class="text-danger col-12">{{ $message }}</span> 
                                        @enderror
                                    </div>                               
                                </div><!--end form-group--> 

                                <div class="form-group">
                                    <label for="country">Country</label>                                            
                                    <div class="input-group mb-3">                               
                                        <input type="text" class="form-control" id="country" placeholder="Enter country" wire:model.defer="country" />
                                    @error('country') 
                                        <span  class="text-danger col-12">{{ $message }}</span> 
                                    @enderror
                                    </div>  
                                </div><!--end form-group-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="capital">Capital</label>                                            
                                            <div class="input-group mb-3">                               
                                                <input type="number" min="0" class="form-control" id="capital" placeholder="Enter capital" wire:model.defer="capital" />
                                            @error('capital') 
                                                <span  class="text-danger col-12">{{ $message }}</span> 
                                            @enderror
                                            </div>  
                                        </div><!--end form-group-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="referral_profit">Referral Bonus</label>                                           
                                            <div class="input-group mb-3">                               
                                                <input type="number" min="0" class="form-control" id="referral_profit" placeholder="Enter Referral Bonus" wire:model.defer="referral_profit" />
                                            @error('referral_profit') 
                                                <span  class="text-danger col-12">{{ $message }}</span> 
                                            @enderror
                                            </div>  
                                        </div><!--end form-group-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="non_profit">Non Compounding Profit</label>                                            
                                            <div class="input-group mb-3">                               
                                                <input type="number" min="0" class="form-control" id="non_profit" placeholder="Enter Non Compounding Profit" wire:model.defer="non_profit" />
                                            @error('non_profit') 
                                                <span  class="text-danger col-12">{{ $message }}</span> 
                                            @enderror
                                            </div>  
                                        </div><!--end form-group-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="c_profit">Compounding profit</label>                                            
                                            <div class="input-group mb-3">                               
                                                <input type="number" min="0" class="form-control" id="c_profit" placeholder="Enter Compounding profit" wire:model.defer="c_profit" />
                                            @error('c_profit') 
                                                <span  class="text-danger col-12">{{ $message }}</span> 
                                            @enderror
                                            </div>  
                                        </div><!--end form-group-->
                                    </div>
                                </div>

                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->                                                        
                </div><!--end auth-page-->                                                    
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-de-primary btn-sm">Save changes</button>
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->