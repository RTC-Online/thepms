<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'customer_id', //integer
        'project_status_id', //integer
        'title', //string
        'description' //text
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    public function status(): BelongsTo {
        return $this->belongsTo(ProjectStatus::class);
    }

    public function tickets(): HasMany {
        return $this->hasMany(Ticket::class);
    }

    public function meetings(): HasMany {
        return $this->hasMany(Meeting::class);
    }

    public function wikis(): HasMany{
        return $this->hasMany(ProjectWiki::class);
    }
}
