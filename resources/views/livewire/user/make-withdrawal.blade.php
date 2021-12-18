<div class="modal fade" wire:ignore.self id="withdrawal-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0">Make Withdrawal</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="text-center ">
                     @if(!empty($from))
                    <h6 class="bg-light-alt py-3 px-2 mb-0">
                      Your {{ $from }} balance is ${{ number_format($limit) }}
                    </h6>
                    @endif
                </div>
                <form>
                    <label class="form-label mt-2" for="setLinkAc">Withdraw From</label>
                    <select class="form-select" wire:model="from" >
                        <option value="" disabled>Select withdrawl type</option>
                            <option value="Non Compounding Profit">Non Compounding Profit</option>
                            <option value="Referal Profit">Referal Profit</option>
                        </select>
                        @error('from') 
                            <p  class="text-danger col-md-12">{{ $message }}</p> 
                        @enderror
                    <label class="form-label mt-2" for="setCurrency">Wallet Type:</label>
                    <select class="form-select" wire:model="wallet_type" >
                        <option value="" disabled>Select wallet type</option>
                        @foreach($wallets as $wallet)
                        <option value="{{ $wallet->name }}">{{ $wallet->name }}</option>
                       @endforeach
                    </select>
                    @error('wallet_type') 
                        <p  class="text-danger col-md-12">{{ $message }}</p> 
                    @enderror
                    <label class="form-label mt-2" wire:model="amount"  for="amount">Amount</label>
                    <input type="number" class="form-control" wire:model="amount">  
                    @error('amount') 
                       <p  class="text-danger col-md-12">{{ $message }}</p> 
                    @enderror

                    <label class="form-label mt-2" wire:model="wallet_address"  for="wallet_address">Wallet Address</label>
                    <input type="wallet_address" class="form-control" wire:model="wallet_address">
                    @error('wallet_address') 
                        <p  class="text-danger col-md-12">{{ $message }}</p> 
                    @enderror
                    <button type="submit" wire:click.prevent="save()" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form>
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
              
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->

