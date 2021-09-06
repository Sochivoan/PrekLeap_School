<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionText extends Model
{
    use HasFactory;

    protected $table = "question_texts";

    protected $fillable = ['question','qc_id'];

    public function questionClasswork()
    {
        return $this->belongsTo(QuestionClasswork::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
