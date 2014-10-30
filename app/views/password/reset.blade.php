@extends('layouts.default')

@section('content')
    <div class="loginForm">
    <h1>Enter your new password</h1>
    <form action="{{ action('RemindersController@postReset') }}" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder=" email address" required="required">
        <input type="password" name="password" placeholder=" password" required="required" autocomplete="off">
        <input type="password" name="password_confirmation" placeholder=" confirm password" required="required" autocomplete="off">
        <div class="Ralign smallFont forgotdiv"><a href="{{URL::route('login')}}">Back to login</a></div>
        <input type="submit" value="Reset Password">
    </form>
    </div>

@endsection