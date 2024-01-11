<x-app-layout>
    <h3>Latest Blog Post</h3>
    <div>{{$latestBlogPost->title}}</div>

    <h3>Latest Art Post</h3>
    <div>{{$latestArtPost->title}}</div>

    <h3>Latest Comic Post</h3>
    <div>{{$latestComicPost->title}}</div>

    <h3>Latest Posts</h3>
    @foreach ($latestPosts as $post)
      <div>{{$post->title}}</div>
    @endforeach
</x-app-layout>
