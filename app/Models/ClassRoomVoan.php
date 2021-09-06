<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoomVoan extends Model
{
    use HasFactory;
    protected $table = 'class_rooms';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
