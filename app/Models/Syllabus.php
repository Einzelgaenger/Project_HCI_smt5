<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'difficulty'
    ];

    public function saved_syllabus(){
        return $this->hasMany(SavedSyllabus::class);
    }

    public function course(){
        return $this->hasMany(Course::class);
    }
}
