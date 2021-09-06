<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";


    protected $fillable = ['name', 'password'];

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function classworks()
    {
        return $this->belongsToMany(QuestionClasswork::class, 'classwork_student' , 'student_id' , 'classwork_id')
        ->withTimestamps()
        ->withPivot(['given_score']);;
    }
}
