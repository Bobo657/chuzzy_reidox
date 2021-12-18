<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Auth;

class ChangePassword extends Component
{
    public $old_password;
    public $new_password;
    public $account;
    public $confirmed_password;

    public function mount(){
        $this->account = Auth::user();
    }

    public function change_password(){

        $this->validate([ 
           'old_password' => 'required',
           'new_password'    => 'required',
        ]);

        if (!Hash::check($this->old_password, $this->account->password)) {
               session()->flash('error', 'The provided password does not match your current password.');
        }else{

            $this->account->password = Hash::make($this->new_password);
            $this->account->save();
            $this->reset(['old_password', 'new_password']);
            session()->flash('message', 'Your password has been changed successfully.');
        }
    }

    public function render()
    {
        return view('livewire.user.change-password');
    }
}
