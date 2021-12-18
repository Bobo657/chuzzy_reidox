<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Wallet;
use Livewire\WithFileUploads;

class AddWallet extends Component
{
    use WithFileUploads;

    public  $wallet;
    public  $photo;

    protected $rules = [
        'wallet.name' => "required|min:2|max:150|unique:wallets,name",
        'wallet.address' => "required|min:2|max:150|unique:wallets,address",
    ];

    protected $validationAttributes = [
       'wallet.name' => 'Name',
       'wallet.address' => 'Address',
    ];

    public function save() 
    {    
        $data = $this->validate(); 
        $this->validate(['photo' => 'required|image|max:1024']);
        
        $extension = $this->photo->getClientOriginalExtension();
        $filename = strtolower($this->wallet['name']);
        $this->wallet['filename'] = str_replace(' ','_',$filename ).'.'.$extension;
        
        $uploaded_wallet = Wallet::create($this->wallet);
        $this->photo->storeAs('wallets', $this->wallet['filename'], 'uploads');

        $this->reset('wallet', 'photo');
        $this->emit('closeModals', '#add-wallet-form');
        // $this->emit('displayMessage', 'Wallet has been added to database');
        $this->emit('walletUpdated');
    }

    public function render()
    {
        return view('livewire.admin.add-wallet');
    }
}
