<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Withdrawal;
use App\Models\Wallet;

class UpdateWithdrawal extends Component
{
    protected $listeners = ['editWithdrawal' => 'getWithdrawal'];

    public  $selected_withdrawal;
    public  $wallet;
    public  $amount;
    public  $wallet_type;
    public  $wallet_address;
    public  $from;
    public  $status;
    public  $created_at;

    public function getWithdrawal(Withdrawal $withdrawal)
    {   
        $this->resetErrorBag();
        $this->selected_withdrawal = $withdrawal;
        
        $this->amount = $withdrawal->amount;
        $this->wallet_type = $withdrawal->wallet_type;
        $this->wallet_address = $withdrawal->wallet_address;
        $this->from = $withdrawal->from;
        $this->status = $withdrawal->status;
        $this->created_at = $withdrawal->created_at->format('Y-m-d H:i:s');
        
        $this->emit('showModal', 'update-withdrawal-form');
    }

    public function update()
    {
       $validatedData = $this->validate(
            [ 'amount' => "required|integer",
               'wallet_type' => 'required',
               'wallet_address' => 'required', 
               'from' => 'required',
               'status' => "required",
               'created_at' => "required|date_format:Y-m-d H:i:s" 
            ]
        );


        $this->selected_withdrawal->update($validatedData);

        $this->reset(['amount',  'wallet_type','wallet_address','from', 'status', 'created_at']);
        $this->emit('closeModals', '#update-withdrawal-form');
        //$this->emit('displayMessage', $this->selected_withdrawal->address.' has been updated successfully');
        $this->emit('withdrawalUpdated');
    }

    public function render()
    {
        return view('livewire.admin.update-withdrawal');
    }
}
