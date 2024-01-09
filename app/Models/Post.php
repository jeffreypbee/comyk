<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function postable() {
        return $this->morphTo();
    }

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
