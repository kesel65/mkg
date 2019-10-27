@extends('layout')

@section('content')
    <div class="container top-margin">
        {!! Form::open(['action' => 'ProjectController@store', 'method' => 'POST']) !!}
        {!! Form::token() !!}
        {!! Form::label('name', 'Project Name') !!}
        {!! Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Project Name']) !!}
        {!! Form::label('url', 'Project URL') !!}
        {!! Form::text('url', $project->url, ['class' => 'form-control', 'placeholder' => 'Project URL']) !!}
        {!! Form::label('photo_url', 'Project Photo URL') !!}
        {!! Form::text('photo_url', $project->photo_url, ['class' => 'form-control', 'placeholder' => 'Project Photo URL']) !!}
        {!! Form::label('short_description', 'Project Short Description') !!}
        {!! Form::text('short_description', $project->short_description, ['class' => 'form-control', 'placeholder' => 'Project Short Description']) !!}
        {!! Form::label('description', 'Project Description') !!}
        {!! Form::textarea('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Project Description']) !!}
        {!! Form::label('published_at', 'Publish?') !!}
        {!! Form::date('published_at', $project->published_at, ['class' => 'form-control']) !!}
        {!! Form::label('demo', 'Does this Project have a Demo?') !!}
        {!! Form::label('demo', 'Yes') !!}
        {!! Form::radio('demo', '1', $project->demo ? 'true' : 'false', ['class' => 'form-control']) !!}
        {!! Form::label('demo', 'No') !!}
        {!! Form::radio('demo', '0', $project->demo ? 'false' : 'true', ['class' => 'form-control']) !!} <br>
        {!! Form::submit('Edit Project', ['class' => 'btn btn-primary btn-lg']) !!}

        {!! Form::close() !!}
    </div>
@endsection
