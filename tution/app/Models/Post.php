<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'role',
        'class',
        'school',
        'subject',
        'merit',
        'age',
        'gender',
        'salary',
        'days_per_week',
        'tutor_gender',
        'additional_info',
    ];
}
