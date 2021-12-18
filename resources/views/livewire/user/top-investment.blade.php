<div class="modal fade" wire:ignore.self id="topDeposit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">Make Deposit</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">

                @if(!isset($deposit_wallet->id))
                    
                    <div class="mb-2">
                        <label for="cryptocurrency">Payment Wallet</label>              
                        <select class="form-select" wire:model="wallet_id">
                            <option selected value="" disabled>-- Select wallet --</option>
                            @foreach($wallets as $wallet)
                               <option value="{{$wallet->id}}">{{ $wallet->name }}</option>
                                @endforeach
                            </select>
                            @error('wallet_id') 
                                <p  class="text-danger">{{ $message }}</p> 
                            @enderror
                    </div>
                    <div class=" mb-2">
                        <label for="toaddress">Amount</label> 
                        <div class="input-group">                                                            
                            <span class="input-group-text" ><i class="fas fa-dollar-sign"></i></span>
                            <input type="number" wire:model="amount" class="form-control" placeholder="Enter Amount" >
                            @error('amount') 
                                <p  class="text-danger col-md-12">{{ $message }}</p> 
                            @enderror
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <h4 class="title nk-kycfm-upload-title text-left">Final Phase</h4>
                        <p>Deposit to {{ $deposit_wallet->name }} Wallet with Address</p>
                        <img src="{{ $deposit_wallet->url }}" style="height: 50%; width: 50%;">
                        <br>
                        <h5>OR</h5>
                        <p>Copy Wallet Address</p>
                    </div>
                    <div class=" mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" id="clipboardInput" value="{{ $deposit_wallet->address }}" aria-label="wallet address" aria-describedby="button-addon2">
                            <button class="btn btn-de-secondary " type="button" id="button-addon2"  data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy me-2"></i>Copy</button>
                          
                        </div>  
                       
                    </div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-secondary" wire:click.prevent="refresh()">
                         I have completed payment to wallet
                        </button>
                    </div>
                @endif
            </div><!--end modal-body-->
             @if(!isset($deposit_wallet->id))
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">
                    Close
                </button>
               
                <button class="btn btn-de-success btn-sm" wire:click.prevent="save()" type="button">
                    Continue
                </button>
                
            </div>
              @endif
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->

    <script src="/admin/plugins/clipboard/clipboard.min.js"></script>
    <script src="/admin/pages/clipboard.init.js"></script>
</div><!--end modal-->

