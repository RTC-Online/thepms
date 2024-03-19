<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingProtocol extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
