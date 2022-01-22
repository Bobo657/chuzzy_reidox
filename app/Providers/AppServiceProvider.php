<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\schema;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Plan;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        schema::defaultStringLength(191);
    }

    
    public function boot()
    {
        Cache::add('plans', Plan::all(), 600);

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
           
            return (new MailMessage)
            ->view('mails.verify_email', ['url' => $url, 'email' => $notifiable->email, 'coupon' => $notifiable->coupon]);
        });

    }
}
