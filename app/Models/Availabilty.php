<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availabilty extends Model
{
    use HasFactory;

    protected $table = "availabilties";

    protected  $fillable = [
        'from',
        'to',
        'available'
    ];
}
