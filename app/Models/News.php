<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'title', //string
        'description', //string
        'content' //text
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }


}
