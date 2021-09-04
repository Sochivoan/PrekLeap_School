<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTitle extends Model
{
    use HasFactory;
    protected $table = 'class_titles';
    protected $fillable = [
        'title',
        'description'
    ];
}
