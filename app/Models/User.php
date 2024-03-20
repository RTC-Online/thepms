<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    ##############################
    ###   Eloquent Relations   ###
    ##############################

    public function companies(): BelongsToMany {
        return $this->belongsToMany(Company::class);
    }

    public function countries(): BelongsToMany {
        return $this->belongsToMany(Country::class);
    }

    public function customers(): BelongsToMany {
        return $this->belongsToMany(Customer::class);
    }

    public function languages(): BelongsToMany {
        return $this->belongsToMany(Language::class);
    }

    public function languageTypes(): BelongsToMany {
        return $this->belongsToMany(LanguageType::class);
    }

    public function meetings(): BelongsToMany {
        return $this->belongsToMany(Meeting::class);
    }

    public function meetingProtocols(): BelongsToMany {
        return $this->belongsToMany(MeetingProtocol::class);
    }

    public function projects(): BelongsToMany {
        return $this->belongsToMany(Project::class);
    }

    public function projectStatuses(): BelongsToMany {
        return $this->belongsToMany(ProjectStatus::class);
    }

    public function projectWikis(): BelongsToMany {
        return $this->belongsToMany(ProjectWiki::class);
    }

    public function tickets(): BelongsToMany {
        return $this->belongsToMany(Ticket ::class);
    }

    public function ticketCategories(): BelongsToMany {
        return $this->belongsToMany(TicketCategory::class);
    }

    public function ticketStatuses(): BelongsToMany {
        return $this->belongsToMany(TicketStatus::class);
    }

    public function ticketTypes(): BelongsToMany {
        return $this->belongsToMany(TicketType::class);
    }

    public function timeBookings(): BelongsToMany {
        return $this->belongsToMany(TimeBooking::class);
    }

    public function timeCategories(): BelongsToMany {
        return $this->belongsToMany(TimeCategory::class);
    }
}
