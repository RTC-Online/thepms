<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', //integer
        'user_id', //integer
        'name', //string
        'description' //text
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->belongsTo(ProjectStatus::class);
    }
}
