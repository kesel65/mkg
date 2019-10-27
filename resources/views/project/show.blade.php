@extends('layout')

@section('content')
    <div class="container top-margin text-center">
        <h1>{{ $project->name }}</h1>
        <a href="{{ $project->url }}"><img src="{{ asset($project->photo_url) }}" alt="" width="400" height="200"></a>
        <h3>{{ $project->url }}</h3>
        <h4>Published At: {{ $project->published_at }}</h4>
        <p>{{ $project->short_description }}</p>
        <p>{{ $project->description }}</p>
        <p>Demo available? {{ $project->demo ? 'Yes' : 'No' }}</p>
    </div>
@endsection
