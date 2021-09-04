<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourvision extends Model
{
    use HasFactory;
    protected $table ='ourvisions';
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
