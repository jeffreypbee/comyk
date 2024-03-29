<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function scopePublished($query) {
        $query->where('publish_date', '<=', Carbon::now());
    }

    public function getPostType() {
        if ($this->postable_type === ArtPost::class) {
            return 'Art';
        } else if ($this->postable_type === ComicPost::class) {
            return 'Comic';
        } else if ($this->postable_type === BlogPost::class) {
            return 'Blog';
        }
        return null;
    }
}
