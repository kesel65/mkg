@extends('layout')

@section('content')
    <div class="container top-margin text-center">
        <iframe width="800" height="400" src="{{ $song->youtube_embed_url }}" frameborder="0" allowfullscreen></iframe>
        <div class="media">
            <div class="media-body">
                <h3>{{ $song->title }}</h3>
                <p>{!! $song->short_description !!}</p>
                <p>{!! $song->description !!}</p>
            </div>
        </div>
    </div>
@endsection
