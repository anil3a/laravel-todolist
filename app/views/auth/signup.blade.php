@extends('layouts.default')

@section('content')

    <h1 class="center">Things To Do</h1>
    
    <div class="loginForm">
    
        <div>

            {{ Form::open() }}

                @if( isset($errors ) )
                     @foreach( $errors->all() as $error)
                         <p class="error">{{ $error }}</p>
                     @endforeach
                @endif
                <div class="relative">
                    <img src="/img/name_icon.png" class="loginicon">
                     <input type="text" name="name" placeholder=" your name"  class="inlineinput" /> 
                </div>

                <div class="clear"></div>
                <br>

                <div class="relative">
                    <img src="/img/user_icon.png" class="loginicon">
                    <input type="text" name="username" placeholder=" user@email.com" class="inlineinput" />
                </div>

                <div class="clear"></div>
                <br>


               <div class="relative">
                    <img src="/img/password_icon.png" class="loginicon">
                    <input type="password" name="password" placeholder=" password" class="inlineinput" />
                </div>

                <div class="clear"></div>
                <br>

                <div class="relative">
                    <img src="/img/password_icon.png" class="loginicon">
                    <input type="password" name="rpassword" placeholder=" confirm password" class="inlineinput" />

                </div>

                <div class="clear"></div>
                
                <div class="forgotdiv">
                    <a href="/login" class="smallFont">Back</a>
                    <input type="submit" class="Ralign submit" value="signup"/>
                </div>
               
            {{ Form::close() }}
        </div>


    </div>
@endsection