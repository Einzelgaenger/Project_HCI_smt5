<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function forum_status(){
        return $this->hasMany(UserForumStatus::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
