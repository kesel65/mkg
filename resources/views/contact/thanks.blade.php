@extends('layout')
 @section('content')
    <div class="top-margin text-center container">
        <h4>Thank you for contacting Michelle Kesel. Please expect an answer within the next 3 business days.</h4>
    </div>
     <div class="text-center container">
         {{ $message->name }}<br>
         {{ $message->email }}<br>
         {{ $message->message }}
     </div>
 @endsection
