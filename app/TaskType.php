<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class TaskType extends Model
{
    protected $guarded = ['id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
