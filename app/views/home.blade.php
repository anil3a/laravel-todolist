@extends('layouts.default')
@section('content')
   <h1>Your Tasks <a href="{{ URL::route('logout') }}" class="smallFont Ralign">Logout</a> <a href="{{ URL::route('new') }}" class="smallFont Ralign">New Task</a></h1>

   <ul>
   @foreach($tasks as $task)
        <li>
            {{ Form::open() }}
                <input
                type="checkbox"
                class="inliner"
                name="id"
                value="{{ $task->id }}"
                {{ $task->done ? "checked" : "" }}
                onclick="this.form.submit()"
                >

                <input
                type="hidden"
                name="id"
                value="{{ $task->id }}"
                >

                {{ e($task->name) }}

                <a href="{{URL::route('delete', $task->id)}}">(x)</a>

            {{ Form::close() }}
        </li>
   @endforeach
   </ul>

   <div class="paginationTasks">
    {{$tasks->links()}}
   </div>


@endsection


