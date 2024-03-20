<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //integer
        'customer_id', //integer
        'email', //string
        'street', //string
        'housenumber', //string
        'postcode', //string
        'city', //string
        'state', //string
        'country', //string
        'suspended' //boolean mit ->default(false) hinten dran
    ];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
