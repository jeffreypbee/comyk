@props(['post'])

<div class="bg-white rounded-lg w-48"
    style="background: url({{$post->image}})">
    <div class="p-1 border-b">{{$post->getPostType()}}</div>
    <div class="font-bold p-10">{{$post->title}}</div>
</div>
