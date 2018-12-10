<?php

namespace App\Http\Controllers;

use App\Day;
use App\User;
use Illuminate\Http\Request;

class UserDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $days = $user->days;
        return $this->showAll($days);
    }

}
