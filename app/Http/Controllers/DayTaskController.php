<?php

namespace App\Http\Controllers;

use App\Task;
use App\Day;
use Illuminate\Http\Request;

class DayTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Day $day
     * @return \Illuminate\Http\Response
     */
    public function index(Day $day)
    {
        $tasks = $day->tasks;
        return $this->showAll($tasks);
    }
}
