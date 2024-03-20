<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'iso2',
        'iso3',
        'tld'
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
