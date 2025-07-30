<?php

namespace App\Actions;

use App\Models\Task;

class DeleteTask
{
    public function handle(Task $task) : bool
    {
        return $task->delete();
    }
}
