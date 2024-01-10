<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['publish_date', 'title', 'body', 'postable_id', 'postable_type'];

    public function postable(): MorphTo {
        return $this->morphTo();
    }

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
