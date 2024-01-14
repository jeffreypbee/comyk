<x-app-layout>

<div class="flex">
    @foreach ($posts as $post)
        <x-site.post-card :post="$post" />
    @endforeach
</div>

</x-app-layout>
