<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTests extends Model
{
    use HasFactory;
    protected $table = 'class_tests';
    protected $fillable = [
        'courses_name',
        'courses_description',
        'link_to_class',
        'image'
    ];
}
