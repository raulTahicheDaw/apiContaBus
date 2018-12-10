<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskType;
use Illuminate\Http\Request;

class TaskTypeTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\TaskType  $taskType
     * @return \Illuminate\Http\Response
     */
    public function index(TaskType $taskType)
    {
        $tasks = $taskType->tasks;
        return $this->showAll($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\TaskType  $taskType
     * @return \Illuminate\Http\Response
     */
    public function create(TaskType $taskType)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskType  $taskType
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TaskType $taskType)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskType  $taskType
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(TaskType $taskType, Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskType  $taskType
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskType $taskType, Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskType  $taskType
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskType $taskType, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskType  $taskType
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskType $taskType, Task $task)
    {
        //
    }
}
