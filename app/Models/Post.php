<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function postable() {
        return $this->morphTo();
    }

    public function author() {
        return User::find($this->user_id);
    }
}
