<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description'
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
}
