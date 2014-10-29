@extends('layouts.default')

@section('content')
    <div class="loginForm">

        {{ Form::open(array('action'=> 'password.remind', 'method' => "POST" ))  }}
            @if( isset($errors ) )
                @foreach( $errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach
            @endif

            <input type="email" name="email" required="required">
            <a href="{{URL::route('login')}}" class="Ralign smallFont forgotdiv">Back to login</a>
            <input type="submit" value="Send Reminder">
        {{ Form::close() }}

     </div>

@endsection