<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ArtPost;
use Illuminate\Http\Request;

class ArtPostController extends Controller
{
    public function index() {
        return view('art.index', [
            'artPosts' => Post::published()->where('postable_type', ArtPost::class)->latest('publish_date')->get()
        ]);
    }
}
