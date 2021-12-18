<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Withdrawals extends Component
{
    protected $listeners = ['showAlert' => 'render'];
    
    public function render()
    {
        return view('livewire.user.withdrawals', [
            'withdrawals' => auth()->user()->withdrawals
        ])->layout('layouts.dashboard');
    }
}
