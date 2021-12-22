<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Investment;
use App\Models\Plan; 
use App\Models\Wallet;
use Mail; 


class MakeDeposit extends Component
{


    public $deposit_wallet;
    public $plans;
    public $wallets;
    public $payment_details;
    public $amount;
    public $payout = '';
    public $wallet_id = '';
    public $plan_id = '';
    public $duration = ''; 
    public $selected_plan;

    public function mount(){
        $this->plans = Plan::all();
        $this->wallets = Wallet::all(); 
    }

    public function save() 
    {   
        $this->payment_details = $this->validate([
                                    'amount' => "required|integer|min:".$this->selected_plan->min.'|max:'.$this->selected_plan->max,
                                    'payout' => "required",
                                    'wallet_id' => "required|integer",
                                    'plan_id' => "required|integer",
                                    'duration' => "required|integer",
                                ]);

        
        $this->deposit_wallet =  $this->wallets->where('id', $this->wallet_id)->first();

    }

    public function sendNotification() 
    {   
     
       auth()->user()->investments()->create($this->payment_details);
       $this->emit('closeModals', '#makeDeposit');
       $this->emit('showAlert', 'Investment was successful, waiting for approval');
       $this->reset(['amount', 'deposit_wallet', 'payout','wallet_id','plan_id','duration' ]);
      
    }

    public function render()
    {
        $this->selected_plan = $this->plans->find($this->plan_id);
        return view('livewire.user.make-deposit');
    }
}
