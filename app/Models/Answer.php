<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = "answers";

    protected $fillable = ['answer' , 'q_id', 's_id'];

    public function question()
    {
        return $this->belongsTo(QuestionText::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
