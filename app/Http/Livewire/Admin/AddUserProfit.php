<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Statement;

class AddUserProfit extends Component
{
    protected $listeners = ['updateProfitHistory' => 'getUser'];

    public  $amount;
    public  $time;
    public  $date;
    public  $type;
    public  $user_id;

    public function mount($user_id)
    {   
        $this->user_id = $user_id;
    }

    public function addProfit()
    {
       $data = $this->validate(
            [  
               'amount' => "required|integer",
               'time' => 'required',
               'type' => 'required',
               'date' => 'required|date', 
            ]
        );

        $data['user_id'] = $this->user_id;
        Statement::create($data);

        $this->reset(['amount', 'type', 'time','date']);
         $this->emit('statementUpdated');
        $this->emit('closeModals', '#add-profit-form');
       
    }


    public function render()
    {
        return view('livewire.admin.add-user-profit');
    }
}
