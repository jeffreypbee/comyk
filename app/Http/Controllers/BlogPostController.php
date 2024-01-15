<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index() {
        return view('blog.index', [
            'blogPosts' => Post::published()->where('postable_type', BlogPost::class)->latest('publish_date')->get()
        ]);
    }
}
