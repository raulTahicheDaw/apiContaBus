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
}
