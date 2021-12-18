<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class AddPost extends Component
{
    use WithFileUploads;

    public  $title;
    public  $body;
    public  $type = 'post';
    public  $photo;

    public function save() 
    {    
        $data = $this->validate([
                    'title' => "required|min:2|max:150",
                    'body' => "required|min:2|max:150",
                    'type' => "required|min:2|max:150"
                ]); 

        $this->validate(['photo' => 'required|image|max:1024']);
        $extension = $this->photo->getClientOriginalExtension();
       
        $data['filename'] = str_replace(' ','_',time()).'.'.$extension;
        auth()->user()->posts()->create($data);
        $this->photo->storeAs('posts', $data['filename'], 'uploads');

        $this->reset('title', 'body', 'type', 'photo');
        $this->emit('closeModals', '#add-post-form');
        $this->emit('postUpdated');
    }

    public function render()
    {
        return view('livewire.admin.add-post');
    }
}
