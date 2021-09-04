<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfor extends Model
{
    use HasFactory;
    protected $table = 'general_infors';
    protected $fillable = [
        'school_tel',
        'school_mobile',
        'school_email',
        'address'
    ];
}
