<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = "prices";

    protected $fillable  = [
        "from_location",
        "to_location",
        "from_time",
        "to_time",
        "duration",
        "price",
        "total"
    ];

}
