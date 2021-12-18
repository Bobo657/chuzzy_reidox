<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Investment;
use App\Models\Wallet;

class UpdateInvestments extends Component
{
    protected $listeners = ['editInvestment' => 'getInvestment'];

    public  $selected_investment;
    public  $wallets;
    public  $amount;
    public  $duration;
    public  $plan_id;
    public  $payout;
    public  $status;
    public  $compounding_duration;
    public  $compounding_status;
    public  $comp_date;
    public  $created_at;
    public  $wallet_id;

    public function mount(){
        $this->wallets = Wallet::all();
    }

    public function getInvestment(Investment $investment)
    {   
        $this->resetErrorBag();
        $this->selected_investment = $investment;
        
        $this->wallet_id = $investment->wallet_id;
        $this->amount = $investment->amount;
        $this->created_at = $investment->created_at->format('Y-m-d H:i:s');
        $this->duration = $investment->duration;
        $this->plan_id = $investment->plan_id;
        $this->payout = $investment->payout;
        $this->status = $investment->status;
        $this->compounding_duration = $investment->compounding_duration;
        $this->compounding_status = $investment->compounding_status;
        $this->comp_date = $investment->comp_date;

        $this->emit('showModal', 'edit-investment-form');
    }

    public function update()
    {
       $validatedData = $this->validate(
            [ 'amount' => "required|integer",
               'wallet_id' => "required",
               'duration' => 'required',
               'plan_id' => 'required|integer',
               // 'comp_date' => 'required|date', 
               'payout' => 'required',
               'status' => "required", 
               'compounding_duration' => 'nullable',
               'compounding_status' => "nullable",  
               'created_at' => "required|date_format:Y-m-d H:i:s" 
            ]
        );

        $this->selected_investment->update($validatedData);

        $this->reset(['amount', 'wallet_id', 'created_at', 'duration','plan_id','payout', 'comp_date', 'status', 'compounding_status', 'compounding_duration']);
        $this->emit('closeModals', '#edit-investment-form');

        //$this->emit('displayMessage', $this->selected_investment->address.' has been updated successfully');
        $this->emit('investmentUpdated');
    }
    public function render()
    {
        return view('livewire.admin.update-investments');
    }
}
