<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Referrals extends Component
{
    public $referrals = [];
    public $uplink;

    public function mount()
    {   
        $this->referrals = auth()->user()->referals;
        $this->uplink = auth()->user()->uplink;
       
    }

    public function render()
    {
        return view('livewire.user.referrals')->layout('layouts.dashboard');
    }
}
