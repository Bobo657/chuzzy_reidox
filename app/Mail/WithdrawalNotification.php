<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Withdrawal;

class WithdrawalNotification extends Mailable
{
    use Queueable, SerializesModels;

   
   public $withdrawal = [];
   public $description;
    public function __construct(Withdrawal $withdrawal)
    {
        $this->withdrawal = $withdrawal;

        if($withdrawal->status == 'approved'){
           $this->description = 'Your withdraw order has been approved and  <strong> $'. number_format($withdrawal->amount)."</strong> has been sent to your <strong>". $withdrawal->wallet_type.' </strong> wallet';
        }else{
             $this->description = 'Your withdrawal request has been received waiting for approval';
        }
        
    }

    public function build()
    {
        return $this->view('mails.withdrawal_notification');
    }
}
