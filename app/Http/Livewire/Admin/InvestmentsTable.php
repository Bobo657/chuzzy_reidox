<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Investment;

class InvestmentsTable extends Component
{

    protected $listeners = ['investmentUpdated' => 'render'];

    public function delete(investment $investment){
        $investment->delete();
        $this->emit('displayMessage', 'Investment has been deleted from database');
    }

    public function render()
    {
        $query = Investment::query()->with(['user','wallet', 'plan']);

        return view('livewire.admin.investments-table', [
                    'investments' => $query->get()
                ])->layout('layouts.dashboard');
    }
}
