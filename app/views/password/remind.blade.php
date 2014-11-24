@extends('layouts.default')

@section('content')
    
    <h1 class="center">Things To Do</h1>

    <div class="loginForm">

        {{ Form::open(array('action'=> 'password.remind', 'method' => "POST" ))  }}
            @if( isset($errors ) )
                @foreach( $errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach
            @endif


            <div class="relative">
                <img src="/img/user_icon.png" class="loginicon">
                <input type="email" name="email" placeholder=" user@email.com" class="inlineinput" />
            </div>

            <div class="clear"></div>
                
            <div class="forgotdiv">
                   <a href="{{URL::route('login')}}" class="smallFont">Back</a>
                    <input type="submit" class="Ralign submit115" value="Send Reminder"/>
            </div>
               
        {{ Form::close() }}

     </div>

@endsection