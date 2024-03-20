<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'name', //string
        'description' //text
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(TimeBooking::class);
    }
}
