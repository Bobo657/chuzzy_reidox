<div class="modal fade" wire:ignore.self id="makeDeposit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">Make Deposit</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">

                @if(!isset($deposit_wallet->id))
                    <div class="mb-2">
                        <label for="cryptocurrency">Investment Package</label>              
                        <select class="form-select" wire:model="plan_id">
                           <option selected value="" disabled>-- Select Package --</option>
                           @foreach($plans as $plan)
                            <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                            @endforeach
                        </select>
                        @error('plan_id') 
                            <p class="text-danger">{{ $message }}</p> 
                        @enderror
                    </div>
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
                            @if(isset($selected_plan->min) )
                                <small class="col-md-12 form-text text-muted">  
                                    (Minimum ${{ number_format($selected_plan->min )}} and Maximum {{  ($selected_plan->roi > 14) ? 'Unlimited' : '$'.number_format($selected_plan->max).' Maximum' }}).
                                </small>
                            @endif

                            @error('amount') 
                                <p  class="text-danger col-md-12">{{ $message }}</p> 
                            @enderror
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="toaddress">Contract Duration</label> 
                                <div class="input-group">
                                   <select class="form-select" wire:model="duration">
                                      <option disabled selected value="">-- Select duration --</option>
                                      <option value="1">1 Month</option>
                                       <option value="6">6 Months</option>
                                       <option value="12">12 Months</option>
                                    </select>
                                    @error('duration') 
                                        <span  class="text-danger">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="BTC">Payout Option</label> 
                                <div class="input-group">
                                   <select class="form-select" wire:model="payout" id="payout">
                                       <option disabled selected value="">Select payout option</option>
                                       @foreach(config('app.payout') as $payout)
                                       <option value="{{ $payout }}">{{ $payout }}</option>
                                       @endforeach
                                    </select>
                                    @error('payout') 
                                        <span  class="text-danger">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>                                                            
                        </div><!--end col-->
                    </div><!--end row-->
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
                        <button type="button" class="btn btn-secondary" wire:click.prevent="sendNotification()">
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
                @if(isset($selected_plan->min))
                <button class="btn btn-de-success btn-sm" wire:click.prevent="save()" type="button">
                    Continue
                </button>
                @endif
            </div>
              @endif
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->

    <script src="/admin/plugins/clipboard/clipboard.min.js"></script>
    <script src="/admin/pages/clipboard.init.js"></script>
</div><!--end modal-->

