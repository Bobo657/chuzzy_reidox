<div class="card">
    <div class="card-body">
         @if (session()->has('message'))
            <div class="alert icon-custom-alert alert-outline-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all alert-icon"></i>
                <div class="alert-text">
                   {{ session()->get('message') }}
                </div> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
        @endif

        <label class="form-label" for="setFullName">Full Name</label>
        <input type="text" class="form-control" id="setFullName" wire:model="name">                              
        @error('name') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror      

        <label class="form-label mt-2" for="setEmail">Email address</label>
        <input type="email" class="form-control" id="email" wire:model="email">                
        @error('email') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror

        <label class="form-label" for="phone">Phone Number</label>
        <input type="text" class="form-control" id="phone" wire:model="phone">                
        @error('phone') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror

        <label class="form-label" for="country">Country</label>
        <input type="text" class="form-control" id="country" wire:model="country">                              
        @error('country') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror  

        <button wire:click.prevent="update()" class="btn btn-primary btn-sm mt-3">Save Change</button>
     
    </div><!--end card-body-->
</div><!--end card-->