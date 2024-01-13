@props(['post'])

<div class="p-10">
    {{$post->title}}
    <img src="{{$post->image}}" alt="">
</div>
