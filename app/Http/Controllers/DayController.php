<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::all();
        return $this->showAll($days);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Day $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        return $this->showOne($day);
    }

}
