<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'language_type_id',
        'name',
        'set1',
        'set2_t',
        'set2_b',
        'set3',
    ];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function type(): BelongsTo {
        return $this->belongsTo(LanguageType::class);
    }
}
