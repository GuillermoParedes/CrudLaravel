<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;

use Crud\Http\Requests;
use Crud\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        $tasks = \Crud\Task::all();
        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('tasks.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
           'title'           => 'required',
            'description'    => 'required'
        ]);

        $input = $request->all();

        \Crud\Task::create($input);
        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $task = \Crud\Task::findOrFail($id);

        return view('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $task = \Crud\Task::findOrFail($id);


        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $task = \Crud\Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input);
        $task->push();
        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
//        return 'holas';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $task = \Crud\Task::findOrFail($id);

        $task->delete();

        Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('tasks.index');
    }
}
