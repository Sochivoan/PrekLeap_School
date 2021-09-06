<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionClasswork extends Model
{
    use HasFactory;

    protected $table = "question_classworks";

    protected $fillable = ['title', 'instruction', 'score', 'c_id', 'due_date'];


    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    
    public function questions()
    {
        return $this->hasMany(QuestionText::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'classwork_student' , 'classwork_id', 'student_id')
                ->withTimestamps()
                ->withPivot(['given_score']);
    }
}
