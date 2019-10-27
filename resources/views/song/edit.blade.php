@extends('layout')

@section('content')
    <div class="container top-margin">
        {{ Form::open(['action' => ['SongController@update', $song->id], 'method' => 'POST']) }}
        {{ Form::token() }}
        @method('PUT')
        {{ Form::label('title', 'Song Title') }}
        {{ Form::text('title', $song->title, ['class' => 'form-control']) }}
        {{ Form::label('thumbnail_url', 'Thumbnail URL') }}
        {{ Form::text('thumbnail_url', $song->thumbnail_url, ['class' => 'form-control']) }}
        {{ Form::label('youtube_url', 'Youtube URL') }}
        {{ Form::text('youtube_url', $song->youtube_url, ['class' => 'form-control']) }}
        {{ Form::label('youtube_embed_url', 'Youtube URL') }}
        {{ Form::text('youtube_embed_url', $song->youtube_embed_url, ['class' => 'form-control']) }}
        {{ Form::label('short_description', 'Short Description') }}
        {{ Form::text('short_description', $song->short_description, ['class' => 'form-control']) }}
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', $song->description, ['class' => 'form-control']) }}
        {{ Form::submit('Edit Song', ['class' => 'btn btn-primary btn-lg']) }}
        {{ Form::close() }}
    </div>
@endsection
