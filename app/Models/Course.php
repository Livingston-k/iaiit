<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }

    public function likes(){
        return $this->hasMany(Like::class, 'course_id');
    }

    public function ratings(){
        return $this->hasMany(Rating::class, 'course_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'course_id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'course_id');
    }
}
