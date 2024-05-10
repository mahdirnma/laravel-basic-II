<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        "title",
        "brand_id",
        "car_type",
        "cylinder",
        "engine_id",
        "price"
    ];

}
