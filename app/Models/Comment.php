<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'forum_id',
        'parent_id'
    ];

    public function forum(){
        return $this->belongsTo(Forum::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'parent_id');
    }
    public function comment(){
        return $this->belongsTo(Comment::class, 'parent_id');
    }
}
