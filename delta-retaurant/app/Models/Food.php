<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable=[
        "title",
        "food_type",
        "entity",
        "category_id",
        "price"
    ];
}
