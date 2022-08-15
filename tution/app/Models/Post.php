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
        'password',
        'address',
        'role',
        'class',
        'school',
        'gender',
        'merit',
        'uni_col_name',
        'dept',
        'age',
        'salary',
    ];
}
