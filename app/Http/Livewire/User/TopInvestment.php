<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Investment;
use App\Models\Wallet;
use App\Models\Plan;

class TopInvestment extends Component
{
    protected $listeners = ['topInvestment' => 'getInvestment'];
    public $investment;
    public $amount;
    public $wallets;
    public $wallet_id = '';
    public $deposited = false;

    public function mount(){
    
        $this->wallets = Wallet::all(); 
    }

    public function getInvestment(Investment $investment)
    {   
        $this->resetErrorBag();
        $this->investment = $investment;
        
        $this->emit('showModal', 'topDeposit');
    }

    public function save()
    {   
        // dd(Plan::where('max', '>', $this->investment->total)->first());

        $data = $this->validate([
                    'amount' => "required|integer",
                    'wallet_id' => "required|integer",
                ]);

        $topUp = $this->investment->replicate()
                    ->fill($data + [
                        'investment_id' => $this->investment->id,
                         'status' => 'pending'
                    ])
                    ->save();

        $this->deposit_wallet =  $this->wallets->where('id', $data['wallet_id'])->first();
        $this->reset(['amount', 'wallet_id']);
    }

    public function refresh(){

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.user.top-investment');
    }
}
