<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
        'name',
        "description",
        "from_location",
        "to_location",
        "from_time",
        "to_time",
        "duration"
    ];

    /**
     * The Carss that belong to the Customer.
     */
    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }

    /**
     * Get the supplier that owns the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * Get all of the prices for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    /**
     * Get all of the Availability for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Availabilty()
    {
        return $this->hasMany(Availabilty::class);
    }

    /**
     * Get all of the brands for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    /**
     * Get all of the  models for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function models()
    {
        return $this->hasMany(ModelCar::class);
    }
}
