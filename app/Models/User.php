<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    public function forum(){
        return $this->hasMany(Forum::class);
    }

    public function forum_status(){
        return $this->hasMany(UserForumStatus::class);
    }

    public function done(){
        return $this->hasMany(Done::class);
    }

    public function ongoing(){
        return $this->hasMany(Ongoing::class);
    }

    public function saved_syllabus(){
        return $this->hasMany(SavedSyllabus::class);
    }

    public function saved_course(){
        return $this->hasMany(SavedCourse::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
