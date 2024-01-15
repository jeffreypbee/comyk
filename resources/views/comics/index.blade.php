<x-app-layout>

    @foreach ($comicSeries as $series)
        <div>{{$series->title}}</div>
    @endforeach

    <x-site.post-card-container :posts="$comicPosts" />

</x-app-layout>
