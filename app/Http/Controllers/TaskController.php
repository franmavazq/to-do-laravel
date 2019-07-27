<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return $task;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $_POST = $request->json()->all();
        $task = Task::create([
            'id_user'=>  $_POST['id_user'],

            'description'=> $_POST['description']
        ]);

        return $task;
    }

    public function register(Request $request)
    {
        return view('TaskRegister');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task = Task::where('id', $id)->orderBy('id', 'desc')->get();

        return $task;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task, $id)
    {
       // $task = task::table('tasks')->get();
        //return \View::make('home')->with('task',$task);
        $task = task::where('id', $id)->delete();

        return $task;
    }
}
