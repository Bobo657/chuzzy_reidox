<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;

class PostTable extends Component
{
    public $wallets;

    protected $listeners = ['postUpdated' => 'render'];

    public function delete(Post $post){
        $post->delete();
       // $this->emit('displayMessage', $post->name.' has been deleted from database');
       
    }

     public function change_status(Post $post){ 
        $post->status = !$post->status;
        $post->save();
    }

    public function render()
    {
        $query = Post::query()->with(['user']);
        return  view('livewire.admin.post-table', [
                    'posts' => $query->get()
                ]);
    }
}
