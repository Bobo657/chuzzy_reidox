<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UpdateUserInfo extends Component
{
    protected $listeners = ['editUser' => 'getUser'];

    public  $selected_user;
    public  $name;
    public  $email;
    public  $phone;
    public  $country;
    public  $referral_profit;
    public  $capital;
    public  $c_profit;
    public  $non_profit;

    public function getUser(User $user)
    {   
        $this->resetErrorBag();
        $this->selected_user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->country = $user->country;
        $this->referral_profit = $user->referral_profit;
        $this->capital = $user->capital;
        $this->c_profit = $user->c_profit;
        $this->non_profit = $user->non_profit;
 
        $this->emit('showModal', 'editUserInfo');
    }

    public function update()
    {
       $validatedData = $this->validate(
                            [  
                               'name' => 'required|unique:users,name,'.$this->selected_user->id,
                               'email' => 'required|email|unique:users,email,'.$this->selected_user->id,
                               'phone' => 'required|unique:users,phone,'.$this->selected_user->id, 
                               'referral_profit' => 'required|integer', 
                               'c_profit' => "required|integer",
                               'capital' => 'required|integer', 
                               'country' => 'required',
                               'non_profit' => 'required|integer'
                            ]
                        );

        $this->selected_user->update($validatedData);

        $this->reset(['non_profit','capital','c_profit','name','email','phone','referral_profit','country']);
        $this->emit('closeModals','#editUserInfo');
        $this->emit('userUpdated');
    }

    public function render()
    {
        return view('livewire.admin.update-user-info');
    }
}
