<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'difficulty'
    ];

    public function module(){
        return $this->hasMany(Module::class);
    }
    public function syllabus(){
        return $this->belongsTo(Syllabus::class);
    }
}
