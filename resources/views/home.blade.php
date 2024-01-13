<x-app-layout>

    <div class="flex gap-5 justify-around">
        <x-site.latest-post-card :post="$latestBlogPost" />
        <x-site.latest-post-card :post="$latestArtPost" />
        <x-site.latest-post-card :post="$latestComicPost" />
    </div>

    <h3>Latest Posts</h3>
    <div class="flex">
        @foreach ($latestPosts as $post)
        <x-site.post-card :post="$post" />
        @endforeach
    </div>

</x-app-layout>
