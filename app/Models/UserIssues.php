<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserIssues extends Model
{
    use HasFactory;

    /**
     * Get the owner of the issue
     */
    public function endUser(): BelongsTo
    {
        return $this->belongsTo(EndUser::class);
    }


    /**
     * Get the product
     */
    public function issueProduct(): BelongsTo
    {
        return $this->belongsTo(IssueProduct::class);
    }

    /**
     * Get the status
     */
    public function issueStatus(): BelongsTo
    {
        return $this->belongsTo(IssueStatus::class);
    }


    /**
     * Get the source
     */
    public function issueSource(): BelongsTo
    {
        return $this->belongsTo(IssueSource::class);
    }

    /**
     * Get the type
     */
    public function issueType(): BelongsTo
    {
        return $this->belongsTo(IssueType::class);
    }

    /**
     * Get the type
     */
    public function serviceType(): BelongsTo
    {
        return $this->belongsTo(ServiceType::class);
    }


}
