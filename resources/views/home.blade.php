@extends('layout')

@section('content')
<div class="jumbotron home">
    <div class="container">
        <h1 class="display-3 code">Hello, world!</h1>
        <p>You have reached Michelle Kesel's portfolio site. Thank you for taking interest in my skills! I hope you find what you're looking for here.</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('bio') }}" role="button">Learn more about Michelle &raquo;</a></p>
    </div>
</div>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Resume</h2>
            <p>Currently, I work for myself as a solutions developer.</p>
            <p><a class="btn btn-secondary" href="{{ route('resume') }}" role="button">View Resume &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Portfolio</h2>
            <p>My portfolio consists of a variety of projects of various complexities. Each of them I either developed myself entirely or I played a major role in the development.</p>
            <p><a class="btn btn-secondary" href="{{ route('portfolio') }}" role="button">View Portfolio &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Contact</h2>
            <p>If you would like to get in contact with me, feel free to use my Contact form. You may ask me any question related to what you see on my site or feel free to reach out to me if you think you have an opportunity I might be interested in.</p>
            <p><a class="btn btn-secondary" href="{{ route('contact') }}" role="button">Contact Michelle &raquo;</a></p>
        </div>
    </div>
</div>
@endsection
