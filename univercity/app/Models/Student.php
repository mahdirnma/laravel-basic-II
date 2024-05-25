<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        "firstname",
        "lastname",
        "national_code",
        "field",
        "semester",
        "is_active"
    ];
}
