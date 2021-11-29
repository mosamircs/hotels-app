<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    
    protected $table = "services";
    
    protected $fillable  = [
        "from_time",
        "to_time",
        "location",
        "number_of_children",
        "number_of_adults",
        "duration",
        "room_type"
    ];
    
    
    
    /**
     * The Hotels that belong to the Customer.
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
}
