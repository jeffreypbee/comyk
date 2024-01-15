<?php

namespace App\Http\Controllers;

use App\Models\ComicPost;
use App\Models\ComicSeries;
use App\Models\Post;
use Illuminate\Http\Request;

class ComicPostController extends Controller
{
    public function index() {
        return view('comics.index', [
            'comicPosts' => Post::published()->where('postable_type', ComicPost::class)->latest('publish_date')->get(),
            'comicSeries' => ComicSeries::all()
        ]);
    }
}
