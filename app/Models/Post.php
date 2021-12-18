<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
        'body',
        'filename',
        'title',
        'body'
    ];

    public function getUrlAttribute()
    {   
        return '/uploads/posts/'.$this->filename;
    }

    public function user(){
        return $this->belongsTo(User::class); 
    }
}
