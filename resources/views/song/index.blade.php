@extends('layout')

@section('content')
    <div class="container top-margin text-center">
        @if(count($songs) === 0)
            <h1>Nothing to see here!</h1>
        @else
            @foreach($songs as $song)
                <div class="media">
                    <a href="{{ $song->youtube_url }}"><img src="{{ asset($song->thumbnail_url) }}" alt="" class="align-self-center mr-3"></a>
                    <div class="media-body">
                        <h3><a href="/songs/{{ $song->id }}">{{ $song->title }}</a></h3>
                        <p>{!! $song->short_description !!}</p>
                    </div>
                </div>
                <hr>
            @endforeach
        @endif
    </div>
@endsection
