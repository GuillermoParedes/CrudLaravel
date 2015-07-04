@extends('layouts.master')
@section('content')
    <h1>" {{ $task->title }} "</h1>
    <p class="lead">{{$task->description}}</p>
    <hr/>

    <a class="btn btn-info" href="{{route('tasks.index')}}">Back to all tasks</a>
    <a class="btn btn-primary" href="{{route('tasks.edit',$task->id)}}">Edit Task</a>

    <main>
        <div class="container">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{Session::get('flash_message')}}
                </div>
            @endif

            @yield('content')
        </div>

    </main>

@stop