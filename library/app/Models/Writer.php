<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $fillable=[
        "firstname",
        "lastname",
        "birth_date",
        "biography",
        "books_id",
        "is_active",
    ];
}
