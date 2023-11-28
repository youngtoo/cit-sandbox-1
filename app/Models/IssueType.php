<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IssueType extends Model
{
    use HasFactory;

    public function userIssues(): HasMany
    {
        return $this->hasMany(UserIssues::class);
    }
}
