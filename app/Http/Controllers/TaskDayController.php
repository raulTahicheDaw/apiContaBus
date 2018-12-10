<?php

namespace App\Http\Controllers;

use App\Day;
use App\Task;
use Illuminate\Http\Request;

class TaskDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function index(Task $task)
    {
        $day = $task->day;
        return $this->showOne($day);
    }
}
