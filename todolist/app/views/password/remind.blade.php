@extends('layouts.default')

@section('content')
    <div class="loginForm">
        <form action="{{ action('RemindersController@postRemind') }}" method="POST">

            @if( isset($error ) )
            <div class="error">
                {{ $error }}
            </div>
            @endif

            <input type="email" name="email">
            <a href="{{URL::route('login')}}" class="Ralign smallFont forgotdiv">Back to login</a>
            <input type="submit" value="Send Reminder">
        </form>
     </div>

@endsection