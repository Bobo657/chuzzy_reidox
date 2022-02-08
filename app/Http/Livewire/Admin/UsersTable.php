<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UsersTable extends Component
{
    protected $listeners = ['userUpdated' => 'render'];
    public $search;
    
    public function change_status(User $user){ 
        $user->status = !$user->status;
        $user->save();
    }

    public function remove_two_factor_authentication(User $user)
    {  
       $user->removeTwoFactorAuthentication();
    }

    public function delete(User $user){
        $user->delete();
        //$this->emit('displayMessage', $user->name.' has been deleted from database');
    }

    public function render()
    {
        $query = User::query()->with('referals')
                ->when(!empty($this->search), function($q){
                    $q->where('users.name', 'LIKE', "%{$this->search}%")
                    ->orWhere('users.phone', 'LIKE', "%{$this->search}%")
                    ->orWhere('users.country', 'LIKE', "%{$this->search}%")
                    ->orWhere('users.capital', 'LIKE', "%{$this->search}%")
                    ->orWhere('users.email', 'LIKE', "%{$this->search}%");
                });

        return view('livewire.admin.users-table',  [
                    'users' => $query->get()
                ])->layout('layouts.dashboard');
    }
}
