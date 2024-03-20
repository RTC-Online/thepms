<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LanguageType extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name'
    ];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function languages(): BelongsToMany {
        return $this->belongsToMany(Language::class);
    }
}
