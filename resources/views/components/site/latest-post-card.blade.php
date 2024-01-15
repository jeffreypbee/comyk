@props(['post'])

<div class="rounded-lg bg-white w-1/4">
    <div class="p-1 border-b">{{$post->getPostType()}}</div>
    <div class="font-bold p-10">{{$post->title}}</div>
    <img src="{{$post->image}}" alt="">
</div>
