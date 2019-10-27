@extends('layout')

@section('content')
    <div class="container top-margin">
        {!! Form::open(['action' => 'ProjectController@store', 'method' => 'POST']) !!}
        {!! Form::token() !!}
        {!! Form::label('name', 'Project Name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Project Name']) !!}
        {!! Form::label('url', 'Project URL') !!}
        {!! Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => 'Project URL']) !!}
        {!! Form::label('photo_url', 'Project Photo URL') !!}
        {!! Form::text('photo_url', old('photo_url'), ['class' => 'form-control', 'placeholder' => 'Project Photo URL']) !!}
        {!! Form::label('short_description', 'Project Short Description') !!}
        {!! Form::text('short_description', old('short_description'), ['class' => 'form-control', 'placeholder' => 'Project Short Description']) !!}
        {!! Form::label('description', 'Project Description') !!}
        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Project Description']) !!}
        {!! Form::label('published_at', 'Publish?') !!}
        {!! Form::date('published_at', old('published_at'), ['class' => 'form-control']) !!}
        {!! Form::label('demo', 'Does this Project have a Demo?') !!}
        {!! Form::label('demo', 'Yes') !!}
        {!! Form::radio('demo', '1', ['class' => 'form-control']) !!}
        {!! Form::label('demo', 'No') !!}
        {!! Form::radio('demo', '0', ['class' => 'form-control']) !!} <br>
        {!! Form::submit('Create New Project', ['class' => 'btn btn-primary btn-lg']) !!}

        {!! Form::close() !!}
    </div>
@endsection
