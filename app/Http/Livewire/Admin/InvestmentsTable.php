<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Investment;

class InvestmentsTable extends Component
{

    protected $listeners = ['investmentUpdated' => 'render'];
    public $search;
    
    public function delete(investment $investment){
        $investment->delete();
        $this->emit('displayMessage', 'Investment has been deleted from database');
    }

    public function render()
    {
        $query = Investment::query()->with(['user','wallet', 'plan']);

        $query->when(!empty($this->search), function ($query) {
                    $query->whereHas('user', function($q){
                        $q->where('users.name', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.phone', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.country', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.capital', 'LIKE', "%{$this->search}%")
                        ->orWhere('users.email', 'LIKE', "%{$this->search}%");
                    });
        });

        return view('livewire.admin.investments-table', [
                    'investments' => $query->get()
                ])->layout('layouts.dashboard');
    }
}
