<x-app-layout>
    <h3>Latest Posts</h3>
    @foreach ($latestPosts as $post)
      <div>{{$post->title}}</div>
    @endforeach
</x-app-layout>
