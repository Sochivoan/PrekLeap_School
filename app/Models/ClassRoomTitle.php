<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoomTitle extends Model
{
    use HasFactory;
    protected $table = 'class_room_titles';
    protected $fillable = [
        'title',
        'description'
    ];
}
