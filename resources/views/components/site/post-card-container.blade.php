@props(['posts'])

<div class="flex flex-wrap">
    @foreach ($posts as $post)
        <x-site.post-card :post="$post" />
    @endforeach
</div>
