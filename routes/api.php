<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('users', 'UserController');
Route::apiResource('users.days', 'UserDayController', ['only' => ['index']]);
Route::apiResource('users.tasks', 'UserDayController', ['only' => ['index']]);

Route::apiResource('tasks', 'TaskController', ['only' => ['index', 'show']]);

Route::apiResource('days', 'DayController', ['only' => ['index', 'show']]);
Route::apiResource('days.tasks', 'DayTaskController', ['only' => ['index']]);

Route::apiResource('task-types', 'TaskTypeController');
Route::apiResource('task-types.tasks', 'TaskTypeTaskController', ['only' => ['index']]);

Route::apiResource('companies', 'CompanyController');
Route::apiResource('companies.users', 'CompanyUserController', ['only' => ['index']]);

