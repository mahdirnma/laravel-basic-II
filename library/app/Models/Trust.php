<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trust extends Model
{
    use HasFactory;
    protected $fillable=[
        "firstname",
        "lastname",
        "books_id",
        "borrow_date",
        "giveback_date",
        "is_active",
    ];
}
