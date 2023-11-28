<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EndUser extends Model
{
    use HasFactory;

    /**
     * Get the issues belonging to the user.
     */
    public function UserIssues() : HasMany
    {
        return $this->hasMany(UserIssues::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    
}
