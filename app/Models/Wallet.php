<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'filename'
    ];

    public function getUrlAttribute()
    {   
        return '/uploads/wallets/'.$this->filename;
    }

    public function transactions(){
        return $this->hasMany(Investment::class, 'wallet_id');
    }
}
