<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Withdrawal;
use App\Models\Investment;
use App\Models\User;

class Dashboard extends Component
{
    public $users;
    public $investments;
    public $withdrawals;

    public function mount(){

        $this->users = User::where('role', 'user')->get();
        $this->investments = Investment::all();
        $this->withdrawals = Withdrawal::all();
    }

    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.dashboard');
    }
}
