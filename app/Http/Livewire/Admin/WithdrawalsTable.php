<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Withdrawal;


class WithdrawalsTable extends Component
{
    protected $listeners = ['withdrawalUpdated' => 'render'];
    public $search;
    
    public function delete(Withdrawal $withdrawal){
        $withdrawal->delete();
        $this->emit('displayMessage', 'withdrawal has been deleted from database');
    }

    public function render()
    {
        $query = Withdrawal::query()->with(['user']);

        $query->when(!empty($this->search), function ($query) {
                    $query->whereHas('user', function($q){
                        $q->where('users.name', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.phone', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.country', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.capital', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.email', 'LIKE', "%{$this->search}%");
                    });
        });

        return view('livewire.admin.withdrawals-table',  ['withdrawals' => $query->get()])
                ->layout('layouts.dashboard');
    }
}
