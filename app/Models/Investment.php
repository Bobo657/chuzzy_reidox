<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\DepositNotification;
use App\Notifications\UserAction;
use Carbon\Carbon;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id', 'package', 'payout', 'duration', 'compounding_status', 'plan_id', 'amount', 'status', 'interest', 'user_id', 'comp_date', 'investment_id', 'created_at', 'profit'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function plan(){
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function wallet(){
        return $this->belongsTo(Wallet::class, 'wallet_id');
    }

    public function topUps(){
        return $this->hasMany(Investment::class, 'investment_id');
    }

    public function getIncreaseAttribute()
    {   
       return $this->topUps->where('status', 'approved')->sum('amount');
    }

    public function getTotalAttribute()
    {   
       return $this->topUps->where('status', 'approved')->sum('amount') + $this->amount;
    }

    public function getDueDateAttribute()
    {
        return  Carbon::parse($this->comp_date)->format('M d, Y');
    }

    public function getColorAttribute()
    {
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
         case 'approved':
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

         static::created (function($deposit){ 

            $subject = 'Deposit request';
            $message = $deposit->user->name. ' made a deposit of $ '.$deposit->amount;
            $admin = User::where('role', 'admin')->first();
            $admin->notify(new UserAction($message, $subject));

            Mail::to($deposit->user->email)->send(new DepositNotification($deposit));
        });


        static::updated(function($investment){ 
            if($investment->wasChanged('status') && $investment->status == 'approved'){
                
                if($investment->investment_id){
                    $parentInvestment =  Investment::find($investment->investment_id);
                    $plan = Plan::where('max', '>', $parentInvestment->total)->first();
                    $parentInvestment->plan_id = $plan->id;
                    $parentInvestment->save();
                }

                $user = $investment->user;
                $user->capital = $user->capital + $investment->amount;
                $user->save();

                $subject = 'Investment Approved';
                $message = '$'.number_format($investment->amount). ' has been approved';
                $investment->user->notify(new UserAction($message, $subject));
                Mail::to($investment->user->email)->send(new DepositNotification($investment));
            }

        });
    } 
}
