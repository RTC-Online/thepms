<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'category',
        'status',
        'description',
        'deadline',
        'difficulty',
        'priority',
        'asignee',
        'guess_effort',
        'calc_effort',
        'leader',
        'members'
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function leader(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function members(): BelongsToMany{
        return $this->belongsToMany(User::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TicketType::class);
    }

    public function project(): BelongsTo{
        return $this->belongsTo(Project::class);
    }

    public function status(): BelongsTo{
        return $this->belongsTo(TicketStatus::class);
    }
}
