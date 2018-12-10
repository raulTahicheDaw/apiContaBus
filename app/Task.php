<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\TaskType;
use App\Day;

class Task extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function taskType()
    {
        return $this->belongsTo(TaskType::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

}
