@extends('layouts.default')

@section('content')
    <h1>Create New Task  <a href="{{ URL::route('home') }}" class="smallFont Ralign">back to home</a></h1>

     @foreach( $errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach

    {{ Form::open() }}
        <input type="text" name="name" placeholder="The name of the task">
        <input type="submit" value="Create">
    {{ Form::close() }}
@endsection