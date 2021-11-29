<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = [
        "name",
        'contact_type',
        "phone",
        "email",
        "vat_id",
        "coc"
    ];

    /**
     * Get all of the hotels for the Supplier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
