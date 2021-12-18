<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Investment;

class DepositNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $investment = [];
    public $description;

    public function __construct(Investment $investment)
    {
        $this->investment = $investment;

         if($investment->status == 'approved'){
           $this->description = 'Your investment of  <strong> $'. number_format($investment->amount)."</strong> has been approved";
        }else{
             $this->description = 'We just wanted you to know that your deposit request of <b>$.'. number_format($investment->amount).'</b> has been received and will be approved once your deposit is confirmed thanks.';
        }
    }

    public function build()
    {
        return $this->view('mails.deposit_notification'); 
    }
}
