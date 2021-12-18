<div class="card">
    <div class="card-header">
        <h4 class="card-title">Admin Mailler</h4>
        <p class="text-muted mb-0">Send Email to customers.</p>
    </div><!--end card-header-->
    <div class="card-body">
        
            @if (session()->has('message'))
            <div class="alert alert-outline-success" role="alert">
                <strong>Well done!</strong> {{ session('message') }}
            </div>
            @endif
            <div class="row">
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="useremail">Email address</label>
                        <input type="email" class="form-control" wire:model="email" id="useremail" required="">
                         @error('email') 
                            <small  class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="subject">Title</label>
                        <input type="text" class="form-control" wire:model="title" id="subject" required="">
                        @error('title') 
                            <small  class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>
                </div>
            </div>

             <div class="mb-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" wire:model="subject" id="subject" required="">
                 @error('subject') 
                    <small  class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="row">
                <div class="col-md-12">                            
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" wire:model="content" rows="5" id="message"></textarea>
                        @error('content') 
                            <small  class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button  wire:loading.remove class="btn btn-de-primary px-4" wire:click.prevent="sendMail()">Send Message</button>

                    <div wire:loading wire:target="sendMail">
                        Sending Email...
                    </div>
                </div>
            </div>
   
    </div><!--end card-body-->
</div>