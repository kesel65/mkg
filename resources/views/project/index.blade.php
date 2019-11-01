@extends('layout')

@section('content')
    <div class="container top-margin text-center">
        @if(empty($projects) || $projects = '')
            <h2>Nothing to see here!</h2>
        @else
            @foreach($projects as $project)
            <div class="container">
                <h1><a href="{{ $project->url }}">{{ $project->name }}</a></h1>
                <a href="{{ $project->url }}"><img src="{{ $project->photo_url }}" alt="" width="400" height="200"></a>
                <h3>{{ $project->url }}</h3>
                <h4>Published At: {{ $project->published_at }}</h4>
                <p>{{ $project->short_description }}</p>
                <p>{{ $project->description }}</p>
                <p>Demo available? {{ $project->demo ? 'Yes' : 'No' }}</p>
            </div>
            @endforeach
        @endif
    </div>
@endsection

@section('banner')
    <div class="jumbotron">
        <h1 class="display-4">Michelle Kesel's Developer Portfolio</h1>
        <p class="lead">Welcome to my portfolio, feel free to look around, click around, and get a feel for my work.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('contact') }}" role="button">Contact Michelle</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('resume') }}" role="button">See Michelle's Resume</a>
    </div>
@endsection
