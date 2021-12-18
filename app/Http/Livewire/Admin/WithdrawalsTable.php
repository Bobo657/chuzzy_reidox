<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Withdrawal;


class WithdrawalsTable extends Component
{
    protected $listeners = ['withdrawalUpdated' => 'render'];

    public function delete(Withdrawal $withdrawal){
        $withdrawal->delete();
        $this->emit('displayMessage', 'withdrawal has been deleted from database');
    }

    public function render()
    {
        $query = Withdrawal::query()->with(['user']);
        return view('livewire.admin.withdrawals-table',  ['withdrawals' => $query->get()])
                ->layout('layouts.dashboard');
    }
}
