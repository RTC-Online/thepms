<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingProtocol extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'meeting_id', //integer
        'headline', //string
        'protocol_text', //text
        'starts_at', //timestamp
        'ends_at', //timestamp
        'started', //boolean mit ->default(false) hinten dran
        'finished' //boolean mit ->default(false) hinten dran
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
