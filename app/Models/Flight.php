<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
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
        "duration",
        "seat_numbers",
        'trip_type'
    ] ;


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
     * The flights that belong to the Customer.
     */
    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
