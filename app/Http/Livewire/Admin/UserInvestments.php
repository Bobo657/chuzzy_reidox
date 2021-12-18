<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\{User,Investment};

class UserInvestments extends Component
{
    protected $listeners = ['showInvestments' => 'getInvestments'];
    public  $investments = [];

    public function getInvestments(User $user)
    {   
     
        $this->investments = $user->investments;
        $this->emit('showModal', 'showUserInvestments');
    }

    public function delete(Investment $investments)
    {
        $user = $investments->user;
        $investments->delete();
        $this->investments = $user->investments;
        //$this->emit('displayMessage', $user->name.' has been deleted from database');
    }

    public function render()
    {
        return view('livewire.admin.user-investments');
    }
}
