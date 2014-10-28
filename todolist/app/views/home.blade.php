@extends('layouts.default')
@section('content')
   <h1>Your Items <a href="{{ URL::route('logout') }}" class="smallFont Ralign">Logout</a> <a href="/new" class="smallFont Ralign">New Task</a></h1>

   <ul>
   @foreach($items as $item)
        <li>
            {{ Form::open() }}
                <input
                type="checkbox"
                class="inliner"
                name="id"
                value="{{ $item->id }}"
                {{ $item->done ? "checked" : "" }}
                onclick="this.form.submit()"
                >

                <input
                type="hidden"
                name="id"
                value="{{ $item->id }}"
                >

                {{ e($item->name) }}

                <a href="{{URL::route('delete', $item->id)}}">(x)</a>

            {{ Form::close() }}
        </li>
   @endforeach
   </ul>
  
   <div class="paginationItems">
    {{$items->links()}}
   </div>


@endsection


