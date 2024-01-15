<x-app-layout>

    <div class="flex">
        @foreach ($comicSeries as $series)
            <div>
                <div>{{$series->title}}</div>
                <img src="{{$series->image}}" />
            </div>
        @endforeach
    </div>


    <x-site.post-card-container :posts="$comicPosts" />

</x-app-layout>
