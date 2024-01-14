@props(['post'])

@php
    $postType = 'Blog';
    if ($post->postable_type === 'App\Models\ArtPost') {
        $postType = 'Art';
    } else if ($post->postable_type === 'App\Models\ComicPost') {
        $postType = 'Comic';
    }
@endphp

<div class="bg-white rounded-lg w-48">
    <div class="p-1 border-b">{{$postType}}</div>
    <div class="font-bold p-10">{{$post->title}}</div>
    <img src="{{$post->image}}" alt="">
</div>
