<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UserReferrals extends Component
{

    public $referrals = [];
    public $uplink;
    public $name;

    protected $listeners = ['getReferrals' => 'getRefs'];

    public function getRefs(User $user)
    {   
        $this->name = $user->name;
        $this->referrals = $user->referals;
        $this->uplink = $user->uplink;
        $this->emit('showModal', 'user-ref-list');
    }

    public function render()
    {
        return view('livewire.admin.user-referrals');
    }
}
