@extends('layouts.master')

@section('content')
    <h1>Task List</h1>
    <p class="lead">Here's a list of all your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>

    <hr/>


    @foreach($tasks as $task)
        <h3>{{$task->title}}</h3>
        <p>{{$task->description}}</p>
        <p>
            <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">View Task</a>
            <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit Task</a>
        </p>
    @endforeach
@stop
