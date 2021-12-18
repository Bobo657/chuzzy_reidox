<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Statement;

class UpdateUserProfit extends Component
{
    protected $listeners = ['editStatement' => 'getStatement'];

    public  $selected_statement;
    public  $amount;
    public  $time;
    public  $date;
    public  $type;
    
    public function getStatement(Statement $statement)
    {   
        $this->resetErrorBag();
        $this->selected_statement = $statement;
        
        $this->amount = $statement->amount;
        $this->time = $statement->time;     
        $this->date = $statement->date;
        $this->type = $statement->type;
        $this->emit('showModal', 'update-profit-form');
    }

    public function update()
    {
       $data =  $this->validate(
                    [  
                       'amount' => "required|integer",
                       'time' => 'required',
                       'type' => 'required',
                       'date' => 'required|date-format:Y-m-d', 
                    ]
                );

        $this->selected_statement->update($data);

        $this->reset(['amount', 'time', 'type', 'date']);
        $this->emit('closeModals', '#update-profit-form');
        $this->emit('statementUpdated');
    }

    public function render()
    {
        return view('livewire.admin.update-user-profit');
    }
}
