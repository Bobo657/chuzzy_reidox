<div class="card">
    <div class="card-body">

        @if (session()->has('error'))
        <div class="example-alert">
            <div class="alert alert-danger alert-icon">
                <em class="icon ni ni-cross-circle"></em> {{ session()->get('error') }} </div>
        </div>
        @endif

         @if (session()->has('message'))
     
            <div class="alert alert-success alert-icon">
                <em class="icon ni ni-check-circle"></em> {{ session()->get('message') }} </div>
      
        @endif
  
        <label class="form-label" for="current_password">Current Password</label>
        <input type="password" class="form-control" id="current_password" wire:model="old_password">   
        @error('old_password') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror     

        <label class="form-label" for="new_password">New Password</label>
        <input type="password" class="form-control" id="new_password" wire:model="new_password">   
        @error('new_password') 
            <p  class="text-danger">{{ $message }}</p> 
        @enderror     

        <label class="form-label" for="confirmed_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirmed_password" wire:model="confirmed_password">   
                                               
        <button wire:click="change_password()" class="btn btn-primary btn-sm mt-3">Save Change</button>
     
    </div><!--end card-body-->
</div><!--end card-->
