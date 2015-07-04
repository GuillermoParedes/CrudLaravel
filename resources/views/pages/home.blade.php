@extends('layouts.master')

@section('content')

    <h1>Welcome Home</h1>
    <p class="lead">Bootstrapping a Laravel CRUD Project.
        <br/>In this tutorial, we’re going to build and run a simple CRUD application from scratch using Laravel 5.</p>
    <hr>

    <a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

@stop