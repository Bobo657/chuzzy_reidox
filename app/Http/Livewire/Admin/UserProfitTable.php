<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\{User, Statement};

class UserProfitTable extends Component
{
    protected $listeners = ['statementUpdated' => 'render'];

    public $statements;
    public $user_id;

    public function mount($id)
    {   
        $this->user_id = $id;
        
    }

    public function delete(Statement $statement){
        $statement->delete();
        $this->statements = Statement::where('user_id', $this->user_id)->get();
        // $this->emit('displayMessage', 'Statement has been deleted from database');
    }

    public function render()
    {
        $this->statements = Statement::where('user_id', $this->user_id)->get();
        return view('livewire.admin.user-profit-table')->layout('layouts.dashboard');;
    }
}
