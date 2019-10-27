@extends('layout')

@section('content')
    <div class="container top-margin">
        {{ Form::open(['action' => 'SongController@store', 'method' => 'POST']) }}
        {{ Form::token() }}
        {{ Form::label('title', 'Song Title') }}
        {{ Form::text('title', old('title'), ['class' => 'form-control']) }}
        {{ Form::label('thumbnail_url', 'Thumbnail URL') }}
        {{ Form::text('thumbnail_url', old('thumbnail_url'), ['class' => 'form-control']) }}
        {{ Form::label('youtube_url', 'Youtube URL') }}
        {{ Form::text('youtube_url', old('youtube_url'), ['class' => 'form-control']) }}
        {{ Form::label('youtube_embed_url', 'Youtube URL') }}
        {{ Form::text('youtube_embed_url', old('youtube_embed_url'), ['class' => 'form-control']) }}
        {{ Form::label('short_description', 'Short Description') }}
        {{ Form::text('short_description', old('short_description'), ['class' => 'form-control']) }}
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', old('description'), ['class' => 'form-control']) }}
        {{ Form::submit('Submit New Song', ['class' => 'btn btn-primary btn-lg']) }}
        {{ Form::close() }}
    </div>
@endsection
