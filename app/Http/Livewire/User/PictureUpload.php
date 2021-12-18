<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class PictureUpload extends Component
{

     use WithFileUploads;

    public  $col;
    public  $photo;
    public  $label;

    public function upload() 
    {    
        $this->validate(['photo' => 'required|image|max:1024']);
        
        $extension = $this->photo->getClientOriginalExtension();
        $filename = auth()->id().time().'.'.$extension;

        auth()->user()->{$this->col} = $filename;
        auth()->user()->save();
        
        $this->photo->storeAs('kyc', $filename, 'uploads');
        return redirect(request()->header('Referer'));
    }


    
    public function render()
    {
        return view('livewire.user.picture-upload');
    }
}
