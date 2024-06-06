<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        "title",
        "release_date",
        "pages",
        "writer_id",
        "category_id",
        "is_active",
    ];
}
