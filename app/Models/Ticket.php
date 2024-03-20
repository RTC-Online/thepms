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
        'title',//string
        'user_id', //integer
        'project_id', //integer
        'ticket_type_id', //ticket_type_id  als integer
        'ticket_category_id',//ticket_category_id  als integer
        'ticket_status_id',//ticket_status_id  als integer
        'description',//text
        'deadline',//timestamp
        'difficulty',//string
        'priority',//string
        'assigne_id',//assigne_id als integer
        'guess_effort',//float
        'calc_effort',//float
        'leader_id',//leader_id als integer
        'activated',//boolean
        'suspended',//boolean
        'members'//nicht in die migration mitnehmen
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

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
