<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return $this->showAll($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'cif' => 'required|unique:companies|max:20',
        ]);
        $company = Company::create($data);
        return $this->showOne($company, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return $this->$this->showOne($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'cif' => 'required|unique:companies|max:20',
        ]);

        if ($request->has('name')) {
            $company->name = $request->name;
        }
        if ($request->has('cif')) {
            $company->cif = $request->cif;
        }
        if ($request->has('telephone')) {
            $company->telephone = $request->telephone;
        }
        if ($request->has('address')) {
            $company->address = $request->address;
        }
        if (!$company->isDirty()) { //Si no ha cambiado nada
            return $this->errorResponse('Por favor cambia al menos un valor', 422);
        }

        $company->save();

        return $this->showOne($company);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return $this->showOne($company);
    }
}
