<x-app-layout>

    Comic Series
    <div class="flex">
        @foreach ($comicSeries as $series)
            <div>
                <div>{{$series->title}}</div>
                <img src="{{$series->image}}" />
            </div>
        @endforeach
    </div>

    Latest Comic Updates
    <x-site.gallery :posts="$comicPosts" />

</x-app-layout>
