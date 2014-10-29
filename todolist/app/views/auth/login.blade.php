@extends('layouts.default')

@section('content')

    <div class="loginForm">
        <div>Welcome to Simple To Do Task</div>
        <br>
        <div>

            {{ Form::open() }}

                @if( isset($errors ) )
                     @foreach( $errors->all() as $error)
                         <p class="error">{{ $error }}</p>
                     @endforeach
                @endif

                <input type="text" name="username" placeholder=" username" />
                <input type="password" name="password" placeholder=" ********" />
                <div class="Ralign smallFont forgotdiv"><a href="{{URL::route('password.remind')}}">Forgot Password</a></div>
                <input type="submit" class="submit" value="login"/>
            {{ Form::close() }}
        </div>


    </div>
@endsection