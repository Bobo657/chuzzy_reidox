<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DisplayNotification extends Component
{
    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('livewire.admin.display-notification', ['notifications' => $notifications]);
    }
}
