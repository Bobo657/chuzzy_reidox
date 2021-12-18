<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UpdateDetails extends Component
{

    public  $name;
    public  $email;
    public  $phone;
    public  $country;
    

    public function mount()
    {   
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->country = auth()->user()->country;
        
    }

    public function update()
    {
       $validatedData = $this->validate(
            [  
               'name' => 'required|max:50',
               'email' => 'required|email|unique:users,email,'.auth()->user()->id,
               'phone' => 'required|unique:users,phone,'.auth()->user()->id, 
               'country' => 'required'
            ]
        );

        auth()->user()->update($validatedData);
        auth()->user()->save();
        session()->flash('message', 'Profile has been updated successfully');
        
    }

    public function render()
    {
        return view('livewire.user.update-details');
    }
}
