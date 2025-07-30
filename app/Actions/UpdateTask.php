<?php

namespace App\Actions;

use App\Enums\TaskStatus;
use App\Models\Task;

class UpdateTask
{
    public function handle(Task $task, array $data) : Task
    {
        if (isset($data['status'])) {
            $data['status'] = TaskStatus::from($data['status'])->value;
        }

        $task->update($data);

        return $task;
    }
}
