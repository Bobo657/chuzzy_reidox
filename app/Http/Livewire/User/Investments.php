<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Investments extends Component
{

    public $investments;

    public function mount()
    {   
        $this->investments = auth()->user()->investments;
    }

    public function render()
    {
        return view('livewire.user.investments')->layout('layouts.dashboard');
    }
}
