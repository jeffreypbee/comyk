<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ArtPost;
use App\Models\BlogPost;
use App\Models\ComicPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'latestPosts' => Post::published()->latest('publish_date')->take(10)->get(),
            'latestBlogPost' => Post::published()->where('postable_type', BlogPost::class)->latest('publish_date')->first(),
            'latestArtPost' => Post::published()->where('postable_type', ArtPost::class)->latest('publish_date')->first(),
            'latestComicPost' => Post::published()->where('postable_type', ComicPost::class)->latest('publish_date')->first()
        ]);
    }
}
