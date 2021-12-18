<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
       'name',
       'email', 
       'phone',
       'country',
       'status',
        'password',
        'capital',
        'non_profit',
        'referral_profit',
        'c_profit',
        'ref_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function hasTwoFactorAuthentication(){
        if($this->two_factor_secret || $this->two_factor_recovery_codes){
            return true;
        }
        return false;
    }

    public function removeTwoFactorAuthentication(){
        $this->two_factor_secret = null;
        $this->two_factor_recovery_codes = null;

        $this->save();
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = ($value) ? date("Y-m-d") : null;
    }

    public function photo(){

        $filename = $this->photo != null ? $this->photo : 'no_image.png';

        return '/uploads/kyc/'.$filename;
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function statements(){
        return $this->hasMany(Statement::class);
    }

    public function investments(){
        return $this->hasMany(Investment::class);
    }

    public function withdrawals(){
        return $this->hasMany(Withdrawal::class);
    }

    public function uplink(){
        return $this->belongsTo(User::class, 'ref_id', 'id');
    }

    public function referals(){
        return $this->hasMany(User::class, 'ref_id', 'id');
    }

    public static function boot() {
        parent::boot();

        static::creating (function($user){   
           $user->code = time();
            //Mail::to($user->email)->send(new ActivationEmail($user));
        });
    }

}
