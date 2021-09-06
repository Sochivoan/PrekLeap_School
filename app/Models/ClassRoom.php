<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = "classrooms";

    protected $fillable = ['name', 'subject', 'room', 'c_code', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function classworks()
    {
        return $this->hasMany(QuestionClasswork::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
