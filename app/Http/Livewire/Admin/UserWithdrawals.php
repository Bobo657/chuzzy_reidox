<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\{User,Withdrawal};

class UserWithdrawals extends Component
{

    protected $listeners = ['shoWithdrawals' => 'getWithdrawals'];
    public  $withdrawals = [];

    public function getWithdrawals(User $user)
    {   
     
        $this->withdrawals = $user->withdrawals;
        $this->emit('showModal', 'showUserWithdrawals');
    }

    public function delete(Withdrawal $withdrawal)
    {
        $user = $withdrawal->user;
        $withdrawal->delete();
        $this->withdrawals = $user->withdrawals;
        //$this->emit('displayMessage', $user->name.' has been deleted from database');
    }


    public function render()
    {
        return view('livewire.admin.user-withdrawals');
    }
}
