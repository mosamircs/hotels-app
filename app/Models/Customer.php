<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = [
        "name",
        'contact_type',
        "phone",
        "email",
        "personal_id",
        "service_types"
    ];

    /**
     * The flights that belong to the Customer.
     */
    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }

    /**
     * The cars that belong to the Customer.
     */
    public function cars()
    {
        return $this->belongsToMany(Car::class,"services","service_id");
    }

    /**
     * The hotels that belong to the Customer.
     */
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class);
    }
}
