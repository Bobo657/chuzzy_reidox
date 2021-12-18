<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Wallet;

class WalletTable extends Component
{

    public $wallets;

    protected $listeners = ['walletUpdated' => 'render'];

    public function delete(Wallet $wallet){
        $wallet->delete();
        $this->emit('displayMessage', $wallet->name.' has been deleted from database');
        $this->wallets = Wallet::all();
    }

    public function render()
    {
        $this->wallets = Wallet::all();
        return view('livewire.admin.wallet-table');
    }
}
