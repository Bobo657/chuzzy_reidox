<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Mail;
use App\Mail\Mailer;
use App\Models\User;

class SendMail extends Component
{
    public  $email;
    public  $content;
    public  $subject;
    public  $title;
    public  $from = 'info@prixcoinassets.com';

    public function sendMail(){

       $data =  $this->validate([
                    'email' => 'nullable|email',
                    'subject' => 'required|min:8',
                    'content' => 'required|min:8',
                    'title' => 'required|min:8',
                ]);

       

        $data['from'] = $this->from;

        if(!empty($this->email)){
            Mail::to($this->email)->send(new Mailer($data));
        }

        if(empty($this->email)) {
            $users = User::where('role', 'user')->get()
                     ->each(function(User $user) use ($data){
                         Mail::to($user->email)->send(new Mailer($data));
                     });
        }

        
        $this->reset(['email',  'subject','content','title']);
         session()->flash('message',  'Message was successfully sent');
    }

    public function render()
    {
        return view('livewire.admin.send-mail');
    }
}
