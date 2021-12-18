<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Auth;

class MakeWithdrawal extends Component
{
    public  $amount;
    public  $from = "";
    public  $wallet_type = "";
    public  $wallet_address;
    public  $wallets;
    public  $limit = 0;

    public function mount(){
        $this->wallets = \App\Models\Wallet::all();
    }
    
    public function save()
    {
       $validatedData = $this->validate(
            [  
               'amount' => "required|integer|max:".$this->limit,
               'from' => 'required',
               'wallet_type' => 'required', 
               'wallet_address' => 'required', 
            ],
            [
                'amount.max' => 'The Insufficent fund.',
            ]
        );

        $withdrawal = auth()->user()->withdrawals()->create($validatedData);

        $this->reset(['amount',  'from','wallet_type','wallet_address']);
        $this->emit('closeModals', '#withdrawal-form');
        $this->emit('showAlert', 'Your withdrawal is being processed we will get back to you.');
    
    }

    public function render()
    {
        $this->limit = ($this->from == 'Non Compounding Profit') ? Auth::user()->non_profit : Auth::user()->referral_profit; 

        return view('livewire.user.make-withdrawal');
    }
}
