<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function meetings(){
        return $this->hasMany(Meeting::class);
    }
}