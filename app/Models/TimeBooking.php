<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeBooking extends Model
{
    use HasFactory;

   protected $fillable = [];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function ticket(): BelongsTo{
        return $this->belongsTo(Ticket::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(TimeCategory::class);
    }
}
