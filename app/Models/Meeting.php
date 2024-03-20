<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'meeting_protocol_id', //integer
        'user_id', //integer
        'title', //string
        'description', //text
        'agenda', //text
        'starts_at', //timestamp
        'ends_at', //timestamp
        'started', //boolean mit ->default(false) hinten dran
        'ended', //boolean mit ->default(false) hinten dran
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function protocol(): BelongsTo
    {
        return $this->belongsTo(MeetingProtocol::class);
    }
}
