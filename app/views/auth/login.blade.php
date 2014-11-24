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

                <div>
                    <input type="checkbox" name="remember"> Remember Me
                    <input type="submit" class="Ralign submit" value="login"/>
                </div>

                <div class="clear"></div>

                <div class="smallFont forgotdiv center">
                    <a href="{{URL::route('password.remind')}}">Forgot Password</a>
                    &nbsp; | &nbsp;
                    <a href="/signup">create an account</a>
                </div>
                
                

            {{ Form::close() }}
        </div>


    </div>




@endsection