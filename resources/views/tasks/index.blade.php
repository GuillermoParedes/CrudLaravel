@extends('layouts.master')

@section('content')
    <h1>Task List</h1>
    <p class="lead">Here's a list of all your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>

    <hr/>


    @foreach($tasks as $task)
        <h3>{{$task->title}}</h3>
        <p>{{$task->description}}</p>
        <div class="row">
            <div class="col-lg-6 text-right">
                <p>
                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">View Task</a>
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit Task</a>
                </p>
            </div>
            <div class="col-lg-6 text-right">
                {!! Form::open(['method' => 'DELETE', 'route'  => ['tasks.destroy', $task->id] ]) !!}
                {!! Form::submit('Delete this task?', ['class' =>'btn btn-danger']) !!}
                {!! form::close() !!}
            </div>
        </div>
    @endforeach
@stop
