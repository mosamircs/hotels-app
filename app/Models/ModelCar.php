<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;

    protected $table = "cars_models_brands";

    protected $fillable = [
        "model_name",
        "model_year"
    ];

}
