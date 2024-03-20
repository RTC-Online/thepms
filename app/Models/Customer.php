<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'company_id', //integer
        'firstname', //string
        'middlenames', //string
        'lastname', //string
        'email', //string
        'street', //string
        'housenumber', //string
        'postcode', //string
        'city', //string
        'state', //string
        'country' //string
    ];

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function company(): BelongsTo {
        return $this->belongsTo(Company::class);
    }
}
