<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Font Awesome -->
        <script src="https://use.fontawesome.com/7eb0008bfa.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Rock+Salt" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{ $title ?? '' }}</title>
    </head>
    <body>
    @include('nav')
