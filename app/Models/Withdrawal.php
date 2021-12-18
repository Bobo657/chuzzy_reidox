<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\WithdrawalNotification;
use App\Notifications\UserAction;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'wallet_type',
        'wallet_address',
        'from',
        'status',
        'created_at'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getColorAttribute(){
        switch ($this->status) {
          case 'cancelled':
            return 'danger';
            break;
          case 'pending':
            return 'warning';
            break;
          case 'completed':
            return 'success';
            break;
          case 'processing':
            return 'info';
            break;
          default:
            return 'danger';
        } 
    }

    public static function boot() {
        parent::boot();

         static::created (function($withdrawal){ 

            $subject = 'Withdrawal Request';
            $message = $withdrawal->user->name. ' made a withdrawal of $ '.$withdrawal->amount;
            $admin = User::where('role', 'admin')->first();
            $admin->notify(new UserAction($message, $subject));

            Mail::to($withdrawal->user->email)->send(new WithdrawalNotification($withdrawal));
        });


        static::updated(function($withdrawal){  
            if($withdrawal->status == "approved"){
                $user = $withdrawal->user;
                
                if($withdrawal->from == 'Non Compounding Profit') {
                    $user->non_profit -= $withdrawal->amount;
                }else{
                    $user->referral_profit -= $withdrawal->amount;
                }   
                    
                $user->save();

                $subject = 'Withdrawal Approved';
                $message = '$'.number_format($withdrawal->amount). ' has been approved';
                
                $user->notify(new UserAction($message, $subject));
                
               Mail::to($withdrawal->user->email)->send(new WithdrawalNotification($withdrawal));
            }
        });
    } 

}
