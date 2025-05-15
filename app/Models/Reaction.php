<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reaction extends Model
{
    /** @use HasFactory<\Database\Factories\ReactionFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
    public function reactionType(): BelongsTo
    {
        return $this->belongsTo(related: ReactionType::class);
    }


}
