@extends('layout')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}

            {!! Form::token() !!}

            <!-- Name Form Input -->
            <div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'sr-only']) !!}
                @if( count($errors) === 0 )
                    {!! Form::text('name', old('name'), ['class' => "form-control", 'placeholder' => 'John Doe']) !!}
                @endif
                @error('name')
                {!! Form::text('name', old('name'), ['class' => "form-control is-invalid", 'placeholder' => 'John Doe']) !!}
                <p class="form-text text-muted invalid-feedback">{{ $errors->first('name') }}</p>
                @enderror
            </div>

            <!-- Email Form Input -->
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'sr-only']) !!}
                @if( count($errors) === 0 )
                {!! Form::text('email', old('email'), ['class' => "form-control", 'placeholder' => 'johndoe@gmail.com']) !!}
                @endif
                @error('email')
                {!! Form::text('email', old('email'), ['class' => "form-control is-invalid", 'placeholder' => 'johndoe@gmail.com']) !!}
                <p class="form-text text-muted invalid-feedback">{{ $errors->first('email') }}</p>
                @enderror
            </div>

            <!-- Message Form Textarea Input -->
            <div class="form-group">
                {!! Form::label('message', 'Message', ['class' => 'sr-only']) !!}
                @if( count($errors) === 0 )
                {!! Form::textarea('message', old('message'), ['class' => "form-control", 'rows' => '3', 'placeholder' => 'Your message here']) !!}
                @endif
                @error('message')
                {!! Form::textarea('message', old('message'), ['class' => "form-control is-invalid", 'rows' => '3', 'placeholder' => 'Your message here']) !!}
                <p class="form-text text-muted invalid-feedback">{{ $errors->first('message') }}</p>
                @enderror
            </div>
            <div class="text-center">
                {!! Form::submit('Send my message to Michelle!', ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('banner')
    <div class="top-margin container text-center">
        <h3>Thank you for contacting Michelle Kesel. <br> Her typical response time is within 3 business days.</h3>
        <hr>
    </div>
@endsection

