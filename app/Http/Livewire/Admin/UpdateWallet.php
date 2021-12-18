<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Wallet;
use Livewire\WithFileUploads;

class UpdateWallet extends Component
{
    use WithFileUploads;

    protected $listeners = ['editWallet' => 'getWallet'];
    public  $selected_wallet;
    public  $name;
    public  $address;
    public  $photo;

    public function getWallet(Wallet $wallet)
    {   
        $this->resetErrorBag();
        $this->selected_wallet = $wallet;
        $this->address = $wallet->address;
        $this->name = $wallet->name;
        $this->emit('showModal', 'edit-wallet-form');
    }

    public function update()
    {
       $validatedData = $this->validate(
                            [  
                               'name' => 'required',
                               'address' => 'required', 
                            ]
                        );

        if($this->photo){
            $this->validate(['photo' => 'required|image|max:1024']);
            
            if (file_exists($this->selected_wallet->url)) {
                @unlink($this->selected_wallet->url);
            }

            $extension = $this->photo->getClientOriginalExtension();
            $filename = strtolower($this->name);
            $this->selected_wallet->filename = str_replace(' ','_',$filename ).'.'.$extension;
            $this->selected_wallet->update($validatedData);

            $this->photo->storeAs('wallets',  $this->selected_wallet->filename, 'uploads'); 
        }else{

            $this->selected_wallet->update($validatedData);

        }

        $this->reset([ 'name','address','photo']);
        $this->emit('closeModals', '#edit-wallet-form');
        $this->emit('displayMessage', $this->selected_wallet->name.' has been updated successfully');
        $this->emit('walletUpdated');
    }

    public function render()
    {
        return view('livewire.admin.update-wallet'); 
    }
}
