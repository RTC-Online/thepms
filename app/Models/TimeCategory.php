<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeCategory extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(TimeBooking::class);
    }
}
