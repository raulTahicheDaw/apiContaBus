<?php

namespace App\Http\Controllers;

use App\TaskType;
use Illuminate\Http\Request;

class TaskTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taskTypes = TaskType::all();
        return $this->showAll($taskTypes);
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
            'name' => 'required|max:45',
            'description' => 'max:100',
        ]);
        $taskType = TaskType::create($data);
        return $this->showOne($taskType, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskType $taskType
     * @return \Illuminate\Http\Response
     */
    public function show(TaskType $taskType)
    {
        return $this->showOne($taskType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\TaskType $taskType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskType $taskType)
    {
        $data = $request->validate([
            'name' => 'max:45',
            'description' => 'max:100',
        ]);
        if ($request->has('name')) {
            $taskType->name = $request->name;
        }
        if ($request->has('description')) {
            $taskType->description = $request->description;
        }
        if (!$taskType->isDirty()) { //Si no ha cambiado nada
            return $this->errorResponse('Por favor cambia al menos un valor', 422);
        }

        $taskType->save();
        return $this->showOne($taskType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskType $taskType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskType $taskType)
    {
        $taskType->delete();
        return $this->showOne($taskType);
    }
}
