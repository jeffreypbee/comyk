<x-app-layout>

    <div class="flex gap-5 justify-around">
        <div class="p-8 rounded-lg border-2 border-black ">
            <h3>Latest Blog Post</h3>
            <div>{{$latestBlogPost->title}}</div>
        </div>

        <div class="p-8 rounded-lg border-2 border-black ">
            <h3>Latest Comic Post</h3>
            <div>{{$latestComicPost->title}}</div>
        </div>

        <div class="p-8 rounded-lg border-2 border-black ">
            <h3>Latest Art Post</h3>
            <div>{{$latestArtPost->title}}</div>
        </div>
    </div>

    <h3>Latest Posts</h3>
    @foreach ($latestPosts as $post)
      <div>{{$post->title}}</div>
    @endforeach
</x-app-layout>
