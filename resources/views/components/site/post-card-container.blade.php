@props(['posts'])

<div class="p-5 flex flex-wrap gap-5 justify-center">
    @foreach ($posts as $post)
        <x-site.post-card :post="$post" />
    @endforeach
</div>
