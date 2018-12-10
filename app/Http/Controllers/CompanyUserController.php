<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use Illuminate\Http\Request;

class CompanyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        $users = $company->users;
        return $this->showAll($users);
    }
}
