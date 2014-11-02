@extends('layouts.default')

@section('content')

    <div class="loginForm">
        <div>Things To Do Task</div>
        <br>
        <p>Sign Up</p>
        <div>

            {{ Form::open() }}

                @if( isset($errors ) )
                     @foreach( $errors->all() as $error)
                         <p class="error">{{ $error }}</p>
                     @endforeach
                @endif

                <input type="text" name="name" placeholder=" Your Name" />
                <input type="email" name="email" placeholder=" Email Address" />
                <input type="password" name="password" placeholder=" ********" />
                <input type="password" name="rpassword" placeholder=" ********" />

                <input type="submit" class="submit" value="Signup"/>
            {{ Form::close() }}
        </div>


    </div>
@endsection