<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Plan;

class Plans extends Component
{
    public $plans;

    public function mount()
    {   
        $this->plans = Plan::all();
       
    }

    public function render()
    {
        return view('livewire.user.plans')->layout('layouts.dashboard');
    }
}
