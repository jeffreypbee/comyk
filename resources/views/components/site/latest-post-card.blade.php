@props(['post'])

<div class="rounded-lg bg-white w-1/4"
    style="background: url({{$post->image}})">
    <div class="p-1 border-b bg-white">{{$post->getPostType()}}</div>
    <div class="font-bold p-10">{{$post->title}}</div>
</div>
