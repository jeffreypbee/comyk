@props(['posts'])

<div class="flex flex-wrap">
    @foreach ($posts as $post)
        <img class="w-48" src="{{$post->image}}" alt="">
    @endforeach
</div>
