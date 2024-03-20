<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'firstname',
        'middlenames',
        'lastname',
        'email',
        'street',
        'housenumber',
        'postcode',
        'city',
        'state',
        'country'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
