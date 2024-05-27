<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegian extends Model
{
    use HasFactory;
    protected $fillable=[
        "student_id",
        "lesson_id",
        "professor_id",
        "is_active"
    ];
}
